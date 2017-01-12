<?php
/**
 * assertEquals(
 *      mixed $expected, 
 *      mixed $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the two variables $expected 
 * and $actual are not equal.
 * 
 * assertNotEquals() is the inverse of this 
 * assertion and takes the same arguments.
 * 
 * assertAttributeEquals() and assertAttributeNotEquals() are convenience 
 * wrappers that use a public, protected, or private attribute 
 * of a class or object as the actual value. 
 */

class EqualsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Testing integer
     */
    public function testInteger()
    {
        $this->assertEquals(1, 0);
    }
 
    /**
     * Testing strings
     */
    public function testString()
    {
        $this->assertEquals('bar', 'baz');
    }
 
    public function testStringAnother()
    {
        $this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
    }
}
?>
