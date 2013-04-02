<?php
//need PHPUnit
include_once ('./PHPUnit/Autoload.php');
echo "<pre>";
print_r(get_class_methods('PHPUnit_Framework_TestCase'));exit;
error_reporting(E_ALL);
//echo "<pre>";
//print_r(get_declared_classes());

class StackTest extends PHPUnit_Framework_TestCase {

    public function testPushAndPop() {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stach, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(1, count($stack));

        $this->assertEquals(1, 2);
    }

}
