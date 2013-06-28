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

    function hightlight($scanner, $source, $settings = null)
    {
        // TODO: Implement hightlight() method.
    }

    function scanners()
    {
        return luminous::scanners();
    }
}