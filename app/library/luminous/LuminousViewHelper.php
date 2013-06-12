<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 13.06.13
 * Time: 00:54
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Luminous;

use Illuminate\Support\Facades\App;

class LuminousViewHelper {

    public static function options() {
        $luminous = App::make('Luminous');

        $languages = $luminous->scanners();
        array_walk(
            $languages,
            function(&$value, $key) {
                $value = $value[0];
            }
        );

        return array_flip($languages);
    }

}