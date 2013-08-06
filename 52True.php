<?php
/**
 * assertTrue(bool $condition[, string $message = ''])
 * Reports an error identified by $message if $condition is FALSE. 
 */
class TrueTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertTrue(FALSE);
    }
}
?>