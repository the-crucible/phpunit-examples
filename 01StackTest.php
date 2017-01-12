<?php
/**
 * This class is to just give you a glimpse that how phpunit works.
 * For writing any test you need to so following things
 * 
 * 1. Write a class which ends with 'Test' and should 
 *    extends PHPUnit_Framework_TestCase class
 * 2. After that write and test functions which should start with 'test'
 * 3. A test class could have multiple test functions
 * 5. You can write other supporting functions also to be 
 *    used in test functions but don't start their names with 'test'. 
 *    Otherwise they will be considered as test functions. 
 */

class StackTest extends PHPUnit_Framework_TestCase
{
    /**
     * This method will be used to test
     * count() function in php, Its a very
     * simple test and multiple assertEquals
     * method are used. Fire it by
     * 
     * $ ./bin/phpunit --colors 01StackTest
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