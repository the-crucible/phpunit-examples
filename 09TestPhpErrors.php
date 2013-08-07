<?php
/**
 * By default, PHPUnit converts PHP errors, warnings, and notices that are 
 * triggered during the execution of a test to an exception. Using these 
 * exceptions, you can, for instance, expect a test to trigger a PHP error
 */

class PhpErrorTest extends PHPUnit_Framework_TestCase
{
    /**
     * This test function contains a code which will
     * create a php warning to happen. This eample show 
     * that in phpunit it will treated as an exception and 
     * it could be catched by 'expectedException' tag and 
     * exception name would be 'PHPUnit_Framework_Error'
     * 
     * @expectedException PHPUnit_Framework_Error
     */
    public function testPhpError()
    {
        $foo_obj = new Foo();
        # Line below will throw an exception here only
        $foo_obj->bar();
        
        # Code execution will never reach this point
        $this->assertTrue(true);
    }
}

/**
 * Class to create a Php warning
 */
class Foo{
    /**
     * This function will create a php warning
     */
    public function bar(){
        # This line will give a php warning because $hello
        # variable is not integer and its being incremented
        $hello++ ;
    }
}
?>