<?php
/**
 * assertStringMatchesFormatFile(string $formatFile, string $string[, string $message = ''])
 * Reports an error identified by $message if the $string does not match the 
 * contents of the $formatFile.
 * assertStringNotMatchesFormatFile() is the inverse of this assertion and takes the same arguments. 
 */

class StringMatchesFormatFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertStringMatchesFormatFile('/path/to/expected.txt', 'foo');
    }
}
?>