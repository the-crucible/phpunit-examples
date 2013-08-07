<?php
/**
 * assertEmpty(mixed $actual[, string $message = ''])
 * 
 * Reports an error identified by $message if $actual is not empty.
 * 
 * assertNotEmpty() is the inverse of this assertion and takes the same arguments.
 * assertAttributeEmpty() and assertAttributeNotEmpty() are convenience wrappers 
 * that can be applied to a public, protected, or private attribute of a class or object.
 *  
 */
class EmptyTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $arr = array('foo');
        #$arr = array();
        #Uncommenting above line will pass this test
        
        $this->assertEmpty($arr);
    }
}
?>