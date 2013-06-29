<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 29.06.13
 * Time: 00:30
 * To change this template use File | Settings | File Templates.
 */

class ImplTest extends TestCase {

    public function testOutput() {
        $luminous = App::make('luminous');

        $this->assertEquals($luminous->scanners(),luminous::scanners());
    }

}