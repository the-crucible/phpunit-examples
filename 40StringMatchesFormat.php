<?php
/**
 * assertStringMatchesFormat(
 *      string $format, 
 *      string $string[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the $string does not match the $format string.
 * 
 * assertStringNotMatchesFormat() is the inverse of this assertion and takes the same arguments. 
 */
class StringMatchesFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $par = 'foo';
        #$par = '10'; // Uncommenting this line will pass the test;
        $this->assertStringMatchesFormat('%i', $par);
    }
}


/*
    The format string may contain the following placeholders:

    %e: Represents a directory separator, for example / on Linux.

    %s: One or more of anything (character or white space) except the end of line character.

    %S: Zero or more of anything (character or white space) except the end of line character.

    %a: One or more of anything (character or white space) including the end of line character.

    %A: Zero or more of anything (character or white space) including the end of line character.

    %w: Zero or more white space characters.

    %i: A signed integer value, for example +3142, -3142.

    %d: An unsigned integer value, for example 123456.

    %x: One or more hexadecimal character. That is, characters in the range 0-9, a-f, A-F.

    %f: A floating point number, for example: 3.142, -3.142, 3.142E-10, 3.142e+10.

    %c: A single character of any sort.


 */
?>