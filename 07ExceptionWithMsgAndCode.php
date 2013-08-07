<?php
/**
 * This class will test the (exception,msg) and (exception,code)
 */

class ExceptionWithMsgAndCodeTest extends PHPUnit_Framework_TestCase
{
    /**
     * If a function is written to test exception and its msg then it should be
     * mentioned as a comment tag in method comment as 'expectedException' and 
     * 'expectedExceptionMessage'
     * 
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
        $exception = new AbcException("hello" , 20 );
        #$exception = new InvalidArgumentException('Right Message', 10); 
        // Uncommenting above line will pass this test
        throw $exception;
    }
 
    /**
     * If a function is written to test exception and its msg then it should be
     * mentioned as a comment tag in method comment as 'expectedException' and 
     * 'expectedExceptionCode'
     * 
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        
        $exception = new AbcException("hello" , 20 );
        #$exception = new InvalidArgumentException('Right Message', 20);
        // Uncommenting above line will pass this test
        throw $exception;
    }
}

class AbcException extends Exception{
    public function __construct($message, $code, $previous = null) {
        parent::__construct($message, $code, $previous);
    } 
}
?>