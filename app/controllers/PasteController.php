<?php

/**
 * User: waigie
 * Date: 09.06.13
 * Time: 00:33
 */

class PasteController extends BaseController {

	public function __construct() {
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
            $paste = App::make('Paste');
            $paste->language = Input::get('language');
            $paste->title = Input::get('title');
            $paste->paste = Input::get('paste');
            $paste->save();
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

}