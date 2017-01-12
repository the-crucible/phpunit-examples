<?php
/**
 * assertStringStartsWith(
 *      string $prefix, 
 *      string $string[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the $string does not start with $prefix.
 * 
 * assertStringStartsNotWith() is the inverse of this assertion and takes the same arguments. 
 */

class StringStartsWithTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertStringStartsWith('prefix', 'foo');
    }
}
?>