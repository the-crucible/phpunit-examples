<?php
/**
 * assertStringEqualsFile(
 *      string $expectedFile, 
 *      string $actualString[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the file specified by 
 * $expectedFile does not have $actualString as its contents.
 * 
 * assertStringNotEqualsFile() is the inverse of this assertion and takes the same arguments. 
 */
define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class StringEqualsFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertStringEqualsFile(D_DIR . 'file1.txt', 'actual');
    }
}
?>