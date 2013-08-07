<?php
/**
 * This class is an example of what happened when a function on which other 
 * functions are dependent get failed
 * 
 * Please see the results by running it
 * Result Expected is:
 * 
 * FAILURES!
 * Tests: 1, Assertions: 1, Failures: 1, Skipped: 2.
 */

class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    
    /**
     * This method is written to fail. testTwo() and
     * testThree() functions are dependent on this function.
     * If this function get failed all the dependent function
     * should fail.
     *  
     */
    public function testOne()
    {
        # This should fail :)
        $this->assertTrue(FALSE);
        return array();
    }
 
    /**
     * This test will never get executed because the function
     * it depends will not get passed
     * 
     * @depends testOne
     */
    public function testTwo($arr)
    {
        
    }
    
    /**
     * This test will also never get executed because the function
     * it depends will not get passed
     * 
     * @depends testOne
     */
    public function testThree($arr)
    {
        
    }
}
?>