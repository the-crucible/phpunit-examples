<?php
/**
 * assertEquals(array $expected, array $actual[, string $message = ''])
 * Reports an error identified by $message if the two arrays 
 * $expected and $actual are not equal. 
 */
class EqualsTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertEquals(array('a', 'b', 'c'), array('a', 'c', 'd'));
    }
}
?>