<?php
/**
 * assertStringMatchesFormatFile(
 *      string $formatFile, 
 *      string $string[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the $string does not match the 
 * contents of the $formatFile.
 * 
 * assertStringNotMatchesFormatFile() is the inverse of 
 * this assertion and takes the same arguments. 
 */
define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class StringMatchesFormatFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        /**
         * @todo Not able to understand what is this. Will update soon.
         */
        $this->assertStringMatchesFormatFile(D_DIR . 'file1.json', 'json');
    }
}
?>