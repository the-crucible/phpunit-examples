<?php

/**
 * assertInstanceOf($expected, $actual[, $message = ''])
 * Reports an error identified by $message if $actual is not an instance of $expected.
 * assertNotInstanceOf() is the inverse of this assertion and takes the same arguments.
 * assertAttributeInstanceOf() and assertAttributeNotInstanceOf() are 
 * convenience wrappers that can be applied to a public, protected, or private 
 * attribute of a class or object. 
 */
class InstanceOfTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertInstanceOf('RuntimeException', new Exception);
    }
}
?>