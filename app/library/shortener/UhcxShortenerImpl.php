<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 08.07.13
 * Time: 23:02
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste\Shortener;

use Jeboehm\Bundle\UhcxBundle\Service\HttpClient;
use Jeboehm\Bundle\UhcxBundle\Service\LinkShortener;
use Illuminate\Support\Facades\Response;


class UhcxShortenerImpl implements ShortenerInterface {

    protected $uhcxLinkShortener;

    public function __construct() {
        $httpClient = new HttpClient();

        $this->uhcxLinkShortener = new LinkShortener();
        $this->uhcxLinkShortener->setClient($httpClient);
        $this->uhcxLinkShortener->setApiUrl('http://uh.cx/api/create/json');
    }


    public function getShortUri($url)
    {

        try {
            $shortend = $this->uhcxLinkShortener->create($url);
        } catch(\Exception $e) {
            return Response::json(array(
                'error' => true,
                'url' => ''
            ));
        }

        return Response::json(array(
           'error' => 'false',
            'url' => $shortend->getUriShort(),
        ));
    }
}