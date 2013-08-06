<?php
/**
 * This class demonstrate the a lot of tests could be dependent on each others 
 * and they could use the return value of each function executed as the input of another.
 * 
 * If of the function failed to give the return value as it get failed
 * all the tests below will be skipped
 */

class StackTest1 extends PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);
 
        return $stack;
    }
 
    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);
 
        return $stack;
    }
 
    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?>