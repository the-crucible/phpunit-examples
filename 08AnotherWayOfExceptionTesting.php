<?php

/**
 * Apart from testing from the tags in the comment block. You can explicitly
 * declare it in the function also. Example below will show how to do it.
 * 
 */
class ExceptionAnotherWayTest extends PHPUnit_Framework_TestCase {

    /**
     * This method shows how to declare exceptions in the test
     * through explicit functions.
     */
    public function testException() {
        $this->setExpectedException('InvalidArgumentException');

        #throw new InvalidArgumentException();
        #Uncommenting above line will pass this test.
    }

    /**
     * This method again now shows how to declare the exception though
     * explicit functions but also with a specific message.
     */
    public function testExceptionHasRightMessage() {
        $this->setExpectedException(
                'InvalidArgumentException', 'Right Message'
        );
        
        #throw new InvalidArgumentException('Right Message');
        #Uncommenting above line will pass this test.
        
        throw new InvalidArgumentException('Some Message', 10);
    }
    
    /**
     * This method again now shows how to declare the exception though
     * explicit functions but also with a specific message and specific 
     * error code.
     */
    
    public function testExceptionHasRightCode() {
        $this->setExpectedException(
                'InvalidArgumentException', 'Right Message', 20
        );
        
        #throw new InvalidArgumentException('Right Message',20);
        #Uncommenting above line will pass this test.
        
        throw new InvalidArgumentException('The Right Message', 10);
    }

}

?>