<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 28.06.13
 * Time: 23:24
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Util;


use Illuminate\Support\ServiceProvider;

class RandomServiceProvider extends ServiceProvider {

    public function register()
    {
        $app = $this->app;

        $app['random'] = function() {
            return new RandomImpl();
        };

    }

}