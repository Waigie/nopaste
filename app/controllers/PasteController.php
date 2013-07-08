<?php

/**
 * User: waigie
 * Date: 09.06.13
 * Time: 00:33
 */

use cweygand\Nopaste\Paste,
    cweygand\Nopaste\Shortener\ShortenerInterface;

class PasteController extends BaseController {

    protected $shortener;

	public function __construct(ShortenerInterface $shortener) {
		$this->beforeFilter('csrf', array('on' => 'post'));
        $this->shortener = $shortener;
	}

	public function newPaste() {
		$validator = Validator::make(
			Input::all(),
			array(
				'paste' => 'required',
			)
		);

		if($validator->fails()) {
			return Redirect::to('/')->withErrors($validator)->withInput();
		} else {
            $paste = Paste::create(Input::all());
            Session::flash('newPaste', true);
            return Redirect::action('PasteController@show', array($paste->hash));
        }
	}

    public function show($hash) {
        $newPaste = Session::get('newPaste', false);
        #Session::forget('newPaste');
        $paste = Paste::where('hash', '=', $hash)->firstOrFail();
        $paste->last_viewed = new DateTime();
        $paste->save();
        return View::make('showpaste', array('paste'=>$paste, 'new'=>$newPaste));
    }

    public function shorten() {
        $shortend = $this->shortener->getShortUri(Input::get('url'));
        return $shortend;
    }

}