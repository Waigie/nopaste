<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 28.06.13
 * Time: 23:16
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Util;

interface RandomInterface {
    function randomString($length);
}