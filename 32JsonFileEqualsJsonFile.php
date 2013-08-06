<?php
/**
 * assertJsonFileEqualsJsonFile(mixed $expectedFile, mixed $actualFile[, string $message = ''])
 * Reports an error identified by $message if the value of $actualFile does not 
 * match the value of $expectedFile. 
 */

class JsonFileEqualsJsonFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertJsonFileEqualsJsonFile(
          'path/to/fixture/file', 'path/to/actual/file');
    }
}
?>