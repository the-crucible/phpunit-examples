<?php
/**
 * assertFalse(bool $condition[, string $message = ''])
 * 
 * Reports an error identified by $message if $condition is TRUE. 
 */
class FalseTest extends PHPUnit_Framework_TestCase
{
    /**
     * This will simply check or a false value (null, undefined, 0 , array() 
     * is not a false value)
     */
    public function testFailure()
    {
        $this->assertFalse(false);
    }
}
?>