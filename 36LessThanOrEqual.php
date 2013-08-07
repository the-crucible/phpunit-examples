<?php

/**
 * assertLessThanOrEqual(
 *      mixed $expected, 
 *      mixed $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the value of $actual is not less 
 * than or equal to the value of $expected.
 * 
 * assertAttributeLessThanOrEqual() is a convenience wrapper that uses a public, 
 * protected, or private attribute of a class or object as the actual value. 
 */
class LessThanOrEqualTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertLessThanOrEqual(1, 2);
    }
}
?>