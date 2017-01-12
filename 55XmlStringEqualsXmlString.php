<?php
/**
 * assertXmlStringEqualsXmlString(
 *      string $expectedXml, 
 *      string $actualXml[, 
 *      string $message = '']
 * )
 * Reports an error identified by $message if the XML document 
 * in $actualXml is not equal to the XML document in $expectedXml.
 * 
 * assertXmlStringNotEqualsXmlString() is the inverse of this assertion 
 * and takes the same arguments. 
 * 
 */

class XmlStringEqualsXmlStringTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertXmlStringEqualsXmlString(
          '<foo><bar/></foo>', '<foo><baz/></foo>');
    }
}
?>