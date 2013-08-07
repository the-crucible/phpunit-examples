<?php
/**
 * assertEquals(
 *      array $expected, 
 *      array $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the two arrays 
 * $expected and $actual are not equal. 
 */
class ArrayEqualsTest extends PHPUnit_Framework_TestCase
{
    /**
     * There they compare two arrays. For arrays to be same.
     *  
     * 1. Both the arrays should contain same values
     * 2. Both the arrays should contain values in the same order.
     * 
     */
    public function testFailure()
    {
        $this->assertEquals(array('a', 'b', 'c'), array('a', 'c', 'd'));
    }
}
?>