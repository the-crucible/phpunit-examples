<?php
/**
 * assertFileExists(string $filename[, string $message = ''])
 * Reports an error identified by $message if the file specified by $filename does not exist.
 * assertFileNotExists() is the inverse of this assertion and takes the same arguments. 
 */
class FileExistsTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertFileExists('/path/to/file');
    }
}
?>