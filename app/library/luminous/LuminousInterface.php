<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 13.06.13
 * Time: 00:50
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Luminous;

interface LuminousInterface {

    function headHtml();
    function hightlight($scanner, $source, $settings = null);
    function scanners();

}