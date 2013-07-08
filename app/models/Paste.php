<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 25.06.13
 * Time: 23:50
 * To change this template use File | Settings | File Templates.
 */

use Illuminate\Support\Facades\App,
    cweygand\Nopaste\Util\RandomInterface;

class Paste extends Eloquent {

    protected $table = "paste";
    protected $fillable = array('title', 'language', 'paste');

    public function save(array $options= array()) {
        if(empty($this->hash)) {
            $this->hash = $this->generateUniqueHash();
        }

        parent::save($options);
    }

    private function generateUniqueHash() {
        $random = App::make('RandomInterface');
        $hash = $random->randomString(7);

        while(self::where('hash', '=', $hash)->count() > 0) {
            $hash = $random->randomString(7);
        }

        return $hash;
    }

}