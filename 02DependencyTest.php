<?php
/**
 * This class demonstrate the a lot of tests could be dependent on each others 
 * and they could use the return value of each function executed as the input of another.
 * 
 * If any of the function failed to give the return value, if it get failed
 * all the tests below will be skipped.
 * 
 * This test is anyway going to be passed but the failure example is covered
 * in 03DependencyFailureTest.php 
 */

class DependencyTest extends PHPUnit_Framework_TestCase
{
    /**
     * This is a simple test but it returns a value also.
     * Multiple functions could be dependent on this function.
     * 
     * @return array 
     */
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);
 
        return $stack;
    }
 
    /**
     * This method is also a test method but its execution depends upon
     * the value returned by testEmpty method. If testEmpty method report
     * any error this test will never be fired
     * 
     * @param array $stack This is an array return by testEmpty method
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
     * This method is also a test method but its execution depends upon
     * the value returned by testEmpty method. If testEmpty method report
     * any error this test will never be fired
     * 
     * @param array $stack This is an array return by testEmpty method
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
?>