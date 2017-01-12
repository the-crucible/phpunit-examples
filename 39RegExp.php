<?php
/**
 * assertRegExp(string $pattern, string $string[, string $message = ''])
 * 
 * Reports an error identified by $message if $string does not match the 
 * regular expression $pattern.
 * 
 * assertNotRegExp() is the inverse of this assertion and takes the same arguments. 
 */
class RegExpTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $par = 'bar';
        #$par = 'foobar'; // Uncommenting this line will pass the test
        $this->assertRegExp('/foo/', $par);
    }
}
?>