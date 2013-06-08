<?php
/**
 * User: waigie
 * Date: 09.06.13
 * Time: 00:33
 */

class PasteController extends BaseController {

    public function newPaste() {
        return View::make('newpaste');
    }

}