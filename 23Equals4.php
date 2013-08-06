<?php
/**
 * assertEquals(object $expected, object $actual[, string $message = ''])
 * Reports an error identified by $message if the two objects $expected and 
 * $actual do not have equal attribute values. 
 */
class EqualsTest extends PHPUnit_Framework_TestCase
{
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