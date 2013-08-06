<?php

/**
 * assertClassHasAttribute(string $attributeName, string $className[, string $message = ''])
 * Reports an error identified by $message if $className::attributeName does not exist.
 * assertClassNotHasAttribute() is the inverse of this assertion and takes the same arguments. 
 */
class ClassHasAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertClassHasAttribute('foo', 'stdClass');
    }
}


?>