<?php
/**
 * This class is an example of what happened when a function above
 * dependent function failed
 * 
 * Result below :
 * PHPUnit 3.7.23 by Sebastian Bergmann.

FS

Time: 2 ms, Memory: 4.00Mb

There was 1 failure:

1) DependencyFailureTest::testOne
Failed asserting that false is true.

/var/www/Phpunit/3DependencyFailure.php:6

FAILURES!
Tests: 1, Assertions: 1, Failures: 1, Skipped: 1.
 *  
 */

class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertTrue(FALSE);
    }
 
    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}
?>