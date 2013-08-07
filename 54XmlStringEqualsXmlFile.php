<?php
/**
 * assertXmlStringEqualsXmlFile(
 *      string $expectedFile, 
 *      string $actualXml[, 
 *      string $message = '']
 * )
 * Reports an error identified by $message if the XML document 
 * in $actualXml is not equal to the XML document in $expectedFile.
 * assertXmlStringNotEqualsXmlFile() is the inverse of this assertion 
 * and takes the same arguments. 
 */

define('DS', DIRECTORY_SEPARATOR);
define('D_DIR' , dirname(__FILE__) . DS . 'data' . DS);

class XmlStringEqualsXmlFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlStringEqualsXmlFile(
          D_DIR . 'file1.xml', '<foo><baz/></foo>');
    }
}
?>