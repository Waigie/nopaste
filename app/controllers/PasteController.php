<?php
/**
 * User: waigie
 * Date: 09.06.13
 * Time: 00:33
 */

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
		}
	}

}