<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 28.06.13
 * Time: 23:45
 * To change this template use File | Settings | File Templates.
 */

class RandomTest extends TestCase {

    public function testIsString() {
        $random = App::make('random');

        $this->assertTrue(is_string($random->randomString(7)));
    }

    public function testLength() {
        $random = App::make('random');

        $this->assertEquals(strlen($random->randomString(5)), 5);
        $this->assertEquals(strlen($random->randomString(7)), 7);
        $this->assertEquals(strlen($random->randomString(0)), 0);
        $this->assertEquals(strlen($random->randomString(32)), 32);
        $this->assertEquals(strlen($random->randomString(128)), 128);
    }

    public function testContainedChars() {
        $random = App::make('random');

        $this->assertEquals(preg_match('/^\w+$/i', $random->randomString(50000)), 1);
    }

}