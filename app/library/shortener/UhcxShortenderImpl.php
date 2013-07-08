<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 08.07.13
 * Time: 23:02
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Shortener;

use Jeboehm\Bundle\UhcxBundle\Service\LinkShortener;

class UhcxShortenderImpl implements ShortenerInterface {

    protected $uhcxLinkShortener;

    public function __construct() {
        $this->uhcxLinkShortener = new LinkShortener();
    }


    public function getShortUri($url)
    {
        $shortend = $this->uhcxLinkShortener->create($url);

        return $shortend->getUriShort();
    }
}