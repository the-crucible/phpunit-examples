<?php

/**
 * assertContainsOnly(string $type, Iterator|array $haystack[, boolean $isNativeType = NULL, string $message = ''])
 * Reports an error identified by $message if $haystack does not contain only variables of type $type.
 * $isNativeType is a flag used to indicate whether $type is a native PHP type or not.
 * assertNotContainsOnly() is the inverse of this assertion and takes the same arguments.
 * assertAttributeContainsOnly() and assertAttributeNotContainsOnly() are convenience wrappers 
 * that use a public, protected, or private attribute of a class or object as the haystack. 
 */
class ContainsOnlyTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnly('string', array('1', '2', 3));
    }
}
?>