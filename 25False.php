<?php
/**
 * assertFalse(bool $condition[, string $message = ''])
 * Reports an error identified by $message if $condition is TRUE. 
 */
class FalseTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertFalse(TRUE);
    }
}
?>