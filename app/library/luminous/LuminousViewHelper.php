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

    public static function languageFromCode($languageCode) {
        $luminous = App::make('LuminousInterface');

        $languages = $luminous->scanners();

        foreach($languages as $language => $codes) {
            if(in_array($languageCode, $codes)) {
                return $language;
            }
        }

        return '';
    }

    public static function options() {
        $luminous = App::make('LuminousInterface');

        $languages = $luminous->scanners();
        array_walk(
            $languages,
            function(&$value, $key) {
                $value = $value[0];
            }
        );

        return array_flip($languages);
    }

    public static function highlight($languageCode, $text) {
        $luminous = App::make('LuminousInterface');

        return $luminous->hightlight($languageCode, $text);
    }

    public static function headHtml() {
        $luminous = App::make('LuminousInterface');

        return $luminous->headHtml();
    }

}