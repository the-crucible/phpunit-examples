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
class XmlFileEqualsXmlFileTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlFileEqualsXmlFile(
          '/home/sb/expected.xml', '/home/sb/actual.xml');
    }
}
?>