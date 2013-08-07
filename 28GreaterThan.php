<?php
/**
 * assertGreaterThan(mixed $expected, mixed $actual[, string $message = ''])
 * 
 * Reports an error identified by $message if the value of 
 * $actual is not greater than the value of $expected.
 * 
 * assertAttributeGreaterThan() is a convenience wrapper that uses a public, 
 * protected, or private attribute of a class or object as the actual value. 
 */
class GreaterThanTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertGreaterThan(2, 1);
    }
    
    public function testAttributeStatic(){
        $this->assertAttributeGreaterThan(2, 'foo', 'BarGreater');
    } 
    
    public function testAttributeObject(){
        $this->assertAttributeGreaterThan(2, 'foo1', new BarGreater());
    }
}

class BarGreater{
    public static $foo = 1;
    public $foo1 = 1;
}
?>