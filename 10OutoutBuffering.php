<?php
/**
 * This test checks for a function which have echoed something.
 */

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }
 
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }
}

/*
void expectOutputRegex(string $regularExpression) 	
Set up the expectation that the output matches a $regularExpression.

void expectOutputString(string $expectedString)
Set up the expectation that the output is equal to an $expectedString.

bool setOutputCallback(callable $callback)
Sets up a callback that is used to, for instance, normalize the actual output. 
 
*/
?>