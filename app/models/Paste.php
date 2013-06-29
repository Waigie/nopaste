<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 25.06.13
 * Time: 23:50
 * To change this template use File | Settings | File Templates.
 */

namespace cweygand\Nopaste;

use cweygand\Nopaste\Util\RandomInterface;
use Eloquent,
    Illuminate\Support\Facades\App;

class Paste extends Eloquent {

    protected $random;
    protected $table = "paste";
    protected $fillable = array('title', 'language', 'paste');

    public function _construct(RandomInterface $random) {
        $this->random = $random;
    }

    public function save(array $options= array()) {
        if(empty($this->hash)) {
            $this->hash = $this->generateUniqueHash();
        }

        parent::save($options);
    }

    private function generateUniqueHash() {
        $hash = $this->random->randomString(7);

        while(self::where('hash', '=', $hash)->count() > 0) {
            $hash = $random->randomString(7);
        }

        return $hash;
    }

}