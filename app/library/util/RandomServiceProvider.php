<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 28.06.13
 * Time: 23:24
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Util;


use Illuminate\Support\ServiceProvider,
    Illuminate\Support\Facades\App;

class RandomServiceProvider extends ServiceProvider {

    public function register()
    {
        App::bind('RandomInterface', 'RandomImpl');
    }

}