<?php
/**
 * assertLessThan(
 *      mixed $expected, 
 *      mixed $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the value of $actual is not 
 * less than the value of $expected.
 * 
 * assertAttributeLessThan() is a convenience wrapper that uses a public, 
 * protected, or private attribute of a class or object as the actual value.
 */
class LessThanTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertLessThan(1, 2);
    }
}
?>