<?php
/**
 * assertNull(mixed $variable[, string $message = ''])
 * 
 * Reports an error identified by $message if $variable is not NULL.
 * 
 * assertNotNull() is the inverse of this assertion and takes the same arguments. 
 */

class NullTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertNull('foo');
    }
}
?>
