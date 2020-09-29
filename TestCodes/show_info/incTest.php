<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of incTest
 *
 * @author Asus
 */
class incTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function setUp() {
        $this->Object=new Checkpass;
    }

    public function tearDown() {
        $this->webDriver->close();
    }

    protected $url = 'http://www.netbeans.org/';

    public function testSimple() {
       $this->assertEquals(true,$this->Object->checkP("abcd1233","abcd1233"));
    }

}
