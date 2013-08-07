<?php
/**
 * assertXmlFileEqualsXmlFile(
 *      string $expectedFile, 
 *      string $actualFile[, 
 *      string $message = '']
 * )
 * Reports an error identified by $message if the XML document in 
 * $actualFile is not equal to the XML document in $expectedFile.
 * assertXmlFileNotEqualsXmlFile() is the inverse of this assertion 
 * and takes the same arguments. 
 */
define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class XmlFileEqualsXmlFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlFileEqualsXmlFile(
          D_DIR . 'file1.xml', D_DIR . 'file2.xml');
    }
}
?>