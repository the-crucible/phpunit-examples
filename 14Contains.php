<?php
/**
 * assertContains(mixed $needle, Iterator|array $haystack[, string $message = ''])
 * Reports an error identified by $message if $needle is not an element of $haystack.
 * assertNotContains() is the inverse of this assertion and takes the same arguments.
 * assertAttributeContains() and assertAttributeNotContains() are convenience wrappers 
 * that use a public, protected, or private attribute of a class or object as the haystack. 
 */
class ContainsTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertContains(4, array(1, 2, 3));
    }
    
    public function testFailure1()
    {
        $this->assertContains('baz','foobar');
    }
}
?>