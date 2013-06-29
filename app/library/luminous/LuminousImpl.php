<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 13.06.13
 * Time: 00:52
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Luminous;

use \luminous;

class LuminousImpl implements LuminousInterface {

    public function hightlight($scanner, $source, $settings = null)
    {
        return luminous::highlight($scanner, $source);
    }

    public function headHtml() {
        luminous::set('relative-root', '/luminous/');
        luminous::set('theme', 'github');
        return luminous::head_html();
    }

    public function scanners()
    {
        return luminous::scanners();
    }
}