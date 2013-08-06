<?php
/**
 * assertEqualXMLStructure(
 *      DOMElement $expectedElement, 
 *      DOMElement $actualElement[, boolean $checkAttributes = FALSE, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the XML Structure of the DOMElement 
 * in $actualElement is not equal to the XML structure of the DOMElement 
 * in $expectedElement. 
 */

class EqualXMLStructureTest extends PHPUnit_Framework_TestCase
{
    public function testFailureWithDifferentNodeNames()
    {
        $expected = new DOMElement('foo');
        $actual = new DOMElement('bar');
 
        $this->assertEqualXMLStructure($expected, $actual);
    }
 
    public function testFailureWithDifferentNodeAttributes()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo bar="true" />');
 
        $actual = new DOMDocument;
        $actual->loadXML('<foo/>');
 
        $this->assertEqualXMLStructure(
          $expected->firstChild, $actual->firstChild, TRUE
        );
    }
 
    public function testFailureWithDifferentChildrenCount()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo><bar/><bar/><bar/></foo>');
 
        $actual = new DOMDocument;
        $actual->loadXML('<foo><bar/></foo>');
 
        $this->assertEqualXMLStructure(
          $expected->firstChild, $actual->firstChild
        );
    }
 
    public function testFailureWithDifferentChildren()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo><bar/><bar/><bar/></foo>');
 
        $actual = new DOMDocument;
        $actual->loadXML('<foo><baz/><baz/><baz/></foo>');
 
        $this->assertEqualXMLStructure(
          $expected->firstChild, $actual->firstChild
        );
    }
}
?>