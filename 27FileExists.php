<?php
/**
 * assertFileExists(
 *      string $filename[, 
 *      string $message = '']
 * );
 * 
 * Reports an error identified by $message if the file 
 * specified by $filename does not exist.
 * 
 * assertFileNotExists() is the inverse of this assertion and takes the same arguments. 
 */

define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class FileExistsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Even if the file doesn't contain anything this test will pass
     * because the file really exists.
     */
    public function testSuccess()
    {
        $this->assertFileExists(D_DIR . 'empty.txt');
    }
}
?>