<?php
/**
 * assertSame(object $expected, object $actual[, string $message = ''])
 * 
 * Reports an error identified by $message if the two variables $expected and $actual 
 * do not reference the same object. 
 */

class SameTest extends PHPUnit_Framework_TestCase
{
    /**
     * Same object means pointing to the same object :)
     */
    public function testFailure()
    {
        $obj1 = new stdClass();
        $obj2 = new stdClass();
        #$obj2 = $obj1; # Uncommenting this line will pass the test
        $this->assertSame($obj1, $obj2);
    }
}
?>