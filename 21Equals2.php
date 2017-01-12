<?php

/**
 * More specialized comparisons are used for specific argument types 
 * for $expected and $actual, see below.
 * assertEquals(float $expected, float $actual[, string $message = '', float $delta = 0])
 * Reports an error identified by $message if the two floats $expected and 
 * $actual are not within $delta of each other.
 * Please read "What Every Computer Scientist Should Know About Floating-Point Arithmetic" 
 * to understand why $delta is neccessary. 
 * 
 */
class FloatEqualsTest extends PHPUnit_Framework_TestCase
{
    public function testSuccess()
    {
        $this->assertEquals(1.0, 1.1, '', 0.2);
    }
 
    public function testFailure()
    {
        $this->assertEquals(1.0, 1.1);
    }
}

?>