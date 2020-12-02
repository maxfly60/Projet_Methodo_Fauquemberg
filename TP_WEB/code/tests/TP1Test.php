<?php

    require "../Tps/TP1/tp1.php";

    class TP1Test extends PHPUnit_Framework_Testcase
    {
        public function testFailureExo1(){

            $this->assertEmpty(['foo']);

        }

        public function testFailureExo2(){

            $this->assertFalse(true);

        }
    }

?>