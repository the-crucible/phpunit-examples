<?php

/**
 * assertClassHasAttribute(
 *      string $attributeName, 
 *      string $className[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if $className::attributeName 
 * does not exist. 
 * 
 * assertClassNotHasAttribute() is the inverse of this assertion 
 * and takes the same arguments. 
 */

class ClassHasAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        /**
         * This line will check that Bar class has foo 
         * instance variable or not.
         * 
         * Note: foo attribute could be of any type: Public, Private or Protected
         */
        $this->assertClassHasAttribute('foo', 'Bar');
    }
}

class Bar{
    public $bar;
    #private $foo;
    #Uncommenting above line will pass the test
}


?>