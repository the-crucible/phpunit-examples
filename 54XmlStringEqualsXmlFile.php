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

class XmlStringEqualsXmlFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlStringEqualsXmlFile(
          '/home/sb/expected.xml', '<foo><baz/></foo>');
    }
}
?>