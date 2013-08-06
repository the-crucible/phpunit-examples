<?php
/**
 * assertSame(mixed $expected, mixed $actual[, string $message = ''])
 * Reports an error identified by $message if the two variables 
 * $expected and $actual do not have the same type and value.
 * assertNotSame() is the inverse of this assertion and takes the same arguments.
 * assertAttributeSame() and assertAttributeNotSame() are convenience wrappers 
 * that use a public, protected, or private attribute of a class or object as the actual value. 
 */
class SameTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertSame('2204', 2204);
    }
}
?>