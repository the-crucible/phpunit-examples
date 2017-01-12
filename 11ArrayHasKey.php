<?php

/**
 * assertArrayHasKey(mixed $key, array $array[, string $message = ''])
 * 
 * Reports an error identified by $message if $array does not have the $key.
 * assertArrayNotHasKey() is the inverse of this assertion and takes the same arguments. 
 */

class ArrayHasKeyTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $test_arr = array('bar' => 'baz');
        
        #$test_arr['foo'] = 'foox';
        #Uncommenting line above will pass the test
        
        $this->assertArrayHasKey('foo', $test_arr);
    }
}
?>