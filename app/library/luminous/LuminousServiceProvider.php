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
    Illuminate\Support\Facades\App;

class LuminousServiceProvider extends ServiceProvider {

    public function register()
    {
        App::bind('LuminousInterface', 'cweygand\Nopaste\Luminous\LuminousImpl');
    }

}