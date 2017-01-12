<?php
/**
 * assertEquals(
 *      object $expected, 
 *      object $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the two objects $expected and 
 * $actual do not have equal attribute values.
 *  
 */
class ObjectEqualsTest extends PHPUnit_Framework_TestCase
{
    /**
     * This function checks that two objects are identical or not
     * means 1. Instance of thee same object 2. Same value of the attributes
     */
    public function testFailure()
    {
        $expected = new stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';
 
        $actual = new stdClass;
        $actual->foo = 'bar';
        $actual->baz = 'bar';
 
        $this->assertEquals($expected, $actual);
    }
}
?>