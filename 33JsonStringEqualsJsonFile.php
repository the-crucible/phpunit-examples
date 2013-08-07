<?php
/**
 * assertJsonStringEqualsJsonFile(
 *      mixed $expectedFile, 
 *      mixed $actualJson[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the value of $actualJson does not 
 * match the value of $expectedFile.
 */

define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class JsonStringEqualsJsonFileTest extends PHPUnit_Framework_TestCase
{
    /**
     * This will fail because json is different
     */
    public function testFailure()
    {
        $this->assertJsonStringEqualsJsonFile(
          D_DIR . 'file2.json', "{\"a\":\"b\", \"c\":\"e\"}  "
        );
    }
    
    /**
     * This will pass irrespective of the fact that content is 
     * different but json is same (Again there are extra white space)
     */
    
    public function testSuccess()
    {
        $this->assertJsonStringEqualsJsonFile(
          D_DIR . 'file2.json', "{\"a\":\"b\", \"c\":\"d\"}  "
        );
    }
}
?>