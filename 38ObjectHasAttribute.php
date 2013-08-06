<?php
/**
 * assertObjectHasAttribute(string $attributeName, object $object[, string $message = ''])
 * Reports an error identified by $message if $object->attributeName does not exist.
 * assertObjectNotHasAttribute() is the inverse of this assertion and takes the same arguments. 
 */
class ObjectHasAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $obj = new stdClass();
        //$obj->foo = 'foo'; // Uncommenting this line will pass the test
        $this->assertObjectHasAttribute('foo', $obj);
    }
}
?>