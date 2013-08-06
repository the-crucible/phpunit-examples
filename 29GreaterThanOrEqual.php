<?php
/**
 * assertGreaterThanOrEqual(mixed $expected, mixed $actual[, string $message = ''])
 * Reports an error identified by $message if the value of $actual is not 
 * greater than or equal to the value of $expected.
 * assertAttributeGreaterThanOrEqual() is a convenience wrapper that uses a 
 * public, protected, or private attribute of a class or object as the actual value. 
 */
class GreatThanOrEqualTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertGreaterThanOrEqual(2, 1);
    }
}
?>