<?php
/**
 * assertJsonFileEqualsJsonFile(
 *      mixed $expectedFile, 
 *      mixed $actualFile[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the value 
 * of $actualFile does not match the value of $expectedFile. 
 */
define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class JsonFileEqualsJsonFileTest extends PHPUnit_Framework_TestCase
{
    /**
     * File is different so this test will fail 
     */
    public function testFailure()
    {
        $this->assertJsonFileEqualsJsonFile(
          D_DIR . 'file2.json', D_DIR . 'file3.json');
    }
    
    /**
     * Content of file is different (white spaces added at the end).
     * But the json is same so it will pass.
     */
    public function testSuccess()
    {
        $this->assertJsonFileEqualsJsonFile(
          D_DIR . 'file1.json', D_DIR . 'file2.json');
    }
}
?>