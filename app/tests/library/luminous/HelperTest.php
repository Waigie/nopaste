<?php
/**
 * Created by JetBrains PhpStorm.
 * User: waigie
 * Date: 25.06.13
 * Time: 22:37
 * To change this template use File | Settings | File Templates.
 */

class HelperTest extends TestCase {

    public function testOptionsEmpty() {

        $luminous_mock = \Mockery::mock('LuminousInterface');
        $luminous_mock->shouldReceive('scanners')->andReturn(array());

        App::instance('luminous', $luminous_mock);

        $this->assertEquals(\cweygand\Nopaste\Luminous\LuminousViewHelper::options(), array());

    }

    public function testOptionsData() {

        $luminous_mock = \Mockery::mock('LuminousInterface');
        $luminous_mock->shouldReceive('scanners')->andReturn(array(
            'C++' => array('c','cpp'),
            'PHP' => array('php'),
            'C#' => array('cs', 'csharp')
        ));

        App::instance('luminous', $luminous_mock);

        $this->assertEquals(\cweygand\Nopaste\Luminous\LuminousViewHelper::options(), array(
            'c' => 'C++',
            'php' => 'PHP',
            'cs' => 'C#'
        ));


    }

}