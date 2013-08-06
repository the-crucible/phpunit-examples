<?php
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
    }
 
    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message'
        );
        throw new InvalidArgumentException('Some Message', 10);
    }
 
    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message', 20
        );
        throw new InvalidArgumentException('The Right Message', 10);
    }
}
?>