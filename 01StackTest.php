<?php
/**
 * This class is my first class I am starting my journey of
 * unit tests with.
 */

class StackTest extends PHPUnit_Framework_TestCase
{
    /**
     * This method will be used to test
     * array_pop method in php, Its a very
     * simple test and lots of assertEquals
     * method are used.
     * 
     * @test 
     */
    
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
 
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));
 
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
?>