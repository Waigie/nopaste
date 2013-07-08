<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 08.07.13
 * Time: 23:00
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Shortener;


Interface ShortenerInterface {

    public function getShortUri($url);

}