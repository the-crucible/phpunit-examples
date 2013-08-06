<?php
/**
 * If some test is used to test exception. Then it could be tested like
 * below.
 */

class ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        throw new InvalidArgumentException();
    }
}


?>