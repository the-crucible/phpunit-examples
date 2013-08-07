<?php
/**
 * assertGreaterThanOrEqual(
 *      mixed $expected, 
 *      mixed $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if 
 * the value of $actual is not greater than 
 * or equal to the value of $expected.
 * 
 * assertAttributeGreaterThanOrEqual() is a convenience wrapper that uses a 
 * public, protected, or private attribute of a class or object as the actual value. 
 */
class GreatThanOrEqualTest extends PHPUnit_Framework_TestCase
{
    
    public function testFailure()
    {
        $this->assertGreaterThanOrEqual(2, 2);
    }
    /** There is some problem with these two functions
     * @todo fix it
     */
    /*
    public function testAttributeStatic()
    {
        $this->assertGreaterThanOrEqual(2, 'foo', 'BarGreatEqual');
    }
    
    public function testAttributeObject()
    {
        $this->assertGreaterThanOrEqual(2, 'foo1', new BarGreatEqual());
    }
    */
    
}

/**
 * Helper class
 */
class BarGreatEqual{
    public static $foo = 2;
    public $foo1 = 2;
}
?>