<?php
/**
 * assertStringEndsWith(string $suffix, string $string[, string $message = ''])
 * Reports an error identified by $message if the $string does not end with $suffix.
 * assertStringEndsNotWith() is the inverse of this assertion and takes the same arguments. 
 */
class StringEndsWithTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $par = "foo";
        $par = "foo-suffix"; // Uncommenting this line will pass the test
        $this->assertStringEndsWith('suffix', $par);
    }
}
?>