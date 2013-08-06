<?php
/**
 * assertJsonStringEqualsJsonFile(mixed $expectedFile, mixed $actualJson[, string $message = ''])
 * Reports an error identified by $message if the value of $actualJson does not 
 * match the value of $expectedFile.
 * Example 4.37: Usage of assertJsonStringEqualsJsonFile() 
 */
class JsonStringEqualsJsonFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertJsonStringEqualsJsonFile(
          'path/to/fixture/file', json_encode(array("Mascott" => "ux"))
        );
    }
}
?>