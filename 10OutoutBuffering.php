<?php
/**
 * This test checks for a function to echo something.
 */

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testExpectFooActualFoo()
    {
        // This line will set the expectation that
        // Which string is going to be echoed
        $this->expectOutputString('foo');
        
        
        $echo_str1 = "foo";
        $echo_str2 = "baar";
        
        $actual_echo_str = $echo_str2;
        #$actual_echo_str = $echo_str1;
        #Uncommenting line above will pass this test;
        
        print $actual_echo_str;
    }
 }

/**
 * Similar functions which test the output buffer but 
 * with different functionalities are below
 * 
 * void expectOutputRegex(string $regularExpression) 	
 * Set up the expectation that the output matches a $regularExpression.
 * 
 * bool setOutputCallback(callable $callback)
 * Sets up a callback that is used to check further that the output was expected or not 
 * 
 */
?>