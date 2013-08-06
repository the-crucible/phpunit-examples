<?php
/**
 * assertEquals(mixed $expected, mixed $actual[, string $message = ''])
 * Reports an error identified by $message if the two variables $expected 
 * and $actual are not equal.
 * assertNotEquals() is the inverse of this assertion and takes the same arguments.
 * assertAttributeEquals() and assertAttributeNotEquals() are convenience 
 * wrappers that use a public, protected, or private attribute 
 * of a class or object as the actual value. 
 */

class EqualsTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertEquals(1, 0);
    }
 
    public function testFailure2()
    {
        $this->assertEquals('bar', 'baz');
    }
 
    public function testFailure3()
    {
        $this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
    }
}
?>
