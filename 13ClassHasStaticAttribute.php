<?php

/**
 * assertClassHasStaticAttribute(
 *      string $attributeName, 
 *      string $className[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message 
 * if $className::attributeName does not exist.
 * 
 * assertClassNotHasStaticAttribute() is the inverse of this 
 * assertion and takes the same arguments. 
 */

class ClassHasStaticAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertClassHasStaticAttribute('foo', 'BarStatic');
    }
}

class BarStatic{
    public static $bar;
    
    public static $foo;
    #Uncommenting above line will pass this test 
}
?>