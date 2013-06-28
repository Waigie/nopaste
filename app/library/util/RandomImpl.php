<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 28.06.13
 * Time: 23:18
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Util;

use cweygand\Nopaste\Util\RandomInterface;

class RandomImpl implements RandomInterface {

    function randomString($length)
    {
        $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789";
        $validCharNumber = strlen($validCharacters);

        $result = "";

        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, $validCharNumber - 1);
            $result .= $validCharacters[$index];
        }

        return $result;
    }
}