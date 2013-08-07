<?php
/**
 * assertEquals(
 *      DOMDocument $expected, 
 *      DOMDocument $actual[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the uncommented canonical form of 
 * the XML documents represented by the two DOMDocument objects 
 * $expected and $actual are not equal. 
 */
class XmlEqualsTest extends PHPUnit_Framework_TestCase
{
    /**
     * assertEquals can check xml document equality also
     * just like EqualXmlStructure function
     */
    public function testFailure()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo><bar/></foo>');
 
        $actual = new DOMDocument;
        $actual->loadXML('<bar><foo/></bar>');
 
        $this->assertEquals($expected, $actual);
    }
}
?>