<?php
/**
 * assertEqualXMLStructure(
 *      DOMElement $expectedElement, 
 *      DOMElement $actualElement[, 
 *      boolean $checkAttributes = FALSE, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the XML Structure of the DOMElement 
 * in $actualElement is not equal to the XML structure of the DOMElement 
 * in $expectedElement. 
 */

class EqualXMLStructureTest extends PHPUnit_Framework_TestCase
{
    /**
     * This function is pretty straight forward and it checks the 
     * two simplest xml structures.
     */
    public function testFailureWithDifferentNodeNames()
    {
        $expected = new DOMElement('foo');
        
        $actual = new DOMElement('bar');
        #$actual = new DOMElement('bar');
        #Uncommenting above line will pass this test
        
        $this->assertEqualXMLStructure($expected, $actual);
    }
 
    /**
     * This function is to test same element but with different 
     * attributes. Third parameter in the function assertEqualXMLStructure
     * is just used to test that.
     */
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
 
    /**
     * This function is to test the same node in the xml
     * but with different count of child nodes.
     */
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
 
    /**
     * This function is used to test the same xml node 
     * but different child nodes
     */
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