<?php

/**
 * User: waigie
 * Date: 09.06.13
 * Time: 00:33
 */

use cweygand\Nopaste\Paste;

class PasteController extends BaseController {

	public function __contruct() {
		$this->beforeFilter('csrf', array('on' => 'post'));
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
            Session::set('newPaste', true);
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

}