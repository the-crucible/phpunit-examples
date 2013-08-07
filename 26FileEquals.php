<?php
/**
 * assertFileEquals(
 *      string $expected, 
 *      string $actual[, 
 *      string $message = '']
 * )
 *    
 * Reports an error identified by $message if the file specified by $expected 
 * does not have the same contents as the file specified by $actual.
 * 
 * assertFileNotEquals() is the inverse of this assertion and takes the same arguments.
 */
define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class FileEqualsTest extends PHPUnit_Framework_TestCase
{
    /**
     * In this test content of both the files are exactly same.
     */
    public function testSuccess()
    {
        $this->assertFileEquals(D_DIR . 'file2.txt', D_DIR. 'file2-1.txt');
    }
    
    /**
     * In this function the content of files are same but there are few white 
     * spaces at the end. This test will fail because white spaces are also 
     * considered as content of the file.
     */
    public function testFailure()
    {
        $this->assertFileEquals(D_DIR . 'file2.txt', D_DIR. 'file1.txt');
    }
}
?>