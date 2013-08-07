<?php
/**
 * assertSelectCount(
 *      array $selector, 
 *      integer $count, 
 *      mixed $actual[, 
 *      string $message = '', 
 *      boolean $isHtml = TRUE]
 * )
 * Reports an error identified by $message if the CSS selector 
 * $selector does not match $count elements in the DOMNode $actual
 * 
 */

/**
 * $count can be one of the following types:
 *
 *   1. boolean: Asserts for presence of elements matching the selector (TRUE) or absence of elements (FALSE).
 *   2. integer: Asserts the count of elements.
 *   3. array: Asserts that the count is in a range specified by using <, >, <=, and >= as keys.
 *
 */
class SelectCountTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->xml = new DomDocument;
        $this->xml->loadXML('<foo><bar/><bar/><bar/></foo>');
    }
 
    public function testAbsenceFailure()
    {
        $this->assertSelectCount('foo bar', FALSE, $this->xml);
    }
 
    public function testPresenceFailure()
    {
        $this->assertSelectCount('foo baz', TRUE, $this->xml);
    }
 
    public function testExactCountFailure()
    {
        $this->assertSelectCount('foo bar', 5, $this->xml);
    }
 
    public function testRangeFailure()
    {
        $this->assertSelectCount('foo bar', array('>'=>6, '<'=>8), $this->xml);
    }
}
?>