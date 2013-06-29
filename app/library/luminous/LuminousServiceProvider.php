<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 13.06.13
 * Time: 01:07
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Luminous;

use Illuminate\Support\ServiceProvider,
    cweygand\Nopaste\Luminous\LuminousImpl;

class LuminousServiceProvider extends ServiceProvider {

    public function register()
    {
        $app = $this->app;

        $app['luminous'] = function() {
            return new LuminousImpl();
        };

    }

}