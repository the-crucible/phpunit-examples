<?php
/**
 * If some test is used to test exception. Then it could be tested like
 * below.
 */

class ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * If a test is written to test Exception then that exception
     * should be mentioned in the comment tag of that function.
     * 
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $exception = new RuntimeException();
        //$exception = new InvalidArgumentException(); 
        //Uncommenting above line will pass the test
        
        throw $exception;
    }
}


?>