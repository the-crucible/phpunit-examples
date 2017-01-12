<?php
/**
 * assertSelectRegExp(
 *      array $selector, 
 *      string $pattern, 
 *      integer $count, 
 *      mixed $actual[, 
 *      string $message = '', 
 *      boolean $isHtml = TRUE]
 * )
 * Reports an error identified by $message if the CSS selector $selector 
 * does not match $count elements in the DOMNode $actual with a value that matches $pattern.
 * 
 * $count can be one of the following types: 
 * 
 *   boolean: Asserts for presence of elements matching the selector (TRUE) or 
 *   absence of elements (FALSE).
 *   integer: Asserts the count of elements.
 *   array: Asserts that the count is in a range specified by using <, >, <=, and >= as keys.
 *
 */

class SelectRegExpTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->xml = new DomDocument;
        $this->xml->loadXML('<foo><bar>Baz</bar><bar>Baz</bar></foo>');
    }
 
    public function testAbsenceFailure()
    {
        $this->assertSelectRegExp('foo bar', '/Ba.*/', FALSE, $this->xml);
    }
 
    public function testPresenceFailure()
    {
        $this->assertSelectRegExp('foo bar', '/B[oe]z]/', TRUE, $this->xml);
    }
 
    public function testExactCountFailure()
    {
        $this->assertSelectRegExp('foo bar', '/Ba.*/', 5, $this->xml);
    }
 
    public function testRangeFailure()
    {
        $this->assertSelectRegExp('foo bar', '/Ba.*/', array('>'=>6, '<'=>8), $this->xml);
    }
}
?>