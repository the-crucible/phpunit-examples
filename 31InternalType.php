<?php
/**
 * assertInternalType($expected, $actual[, $message = ''])
 * 
 * Reports an error identified by $message if 
 * $actual is not of the $expected type.
 * 
 * assertNotInternalType() is the inverse of this 
 * assertion and takes the same arguments.
 * 
 * assertAttributeInternalType() and assertAttributeNotInternalType() are 
 * convenience wrappers that can be applied to a public, protected, or 
 * private attribute of a class or object. 
 */
class InternalTypeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertInternalType('string', 42);
    }
}
?>