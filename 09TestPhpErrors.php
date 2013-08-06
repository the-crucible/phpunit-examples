<?php
/**
 * By default, PHPUnit converts PHP errors, warnings, and notices that are 
 * triggered during the execution of a test to an exception. Using these 
 * exceptions, you can, for instance, expect a test to trigger a PHP error
 */

class ExpectedErrorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }
}
?>