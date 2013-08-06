<?php
/**
 * assertFileEquals(string $expected, string $actual[, string $message = ''])
 * Reports an error identified by $message if the file specified by $expected 
 * does not have the same contents as the file specified by $actual.
 * assertFileNotEquals() is the inverse of this assertion and takes the same arguments.
 */
class FileEqualsTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertFileEquals('/home/sb/expected', '/home/sb/actual');
    }
}
?>