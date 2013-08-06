<?php
/**
 * This example show that how we can provide functions which will acct as
 * a data providor for another test.
 * 
 * The providor can send data in a array if we have to send multiple variables
 * and it may send multidimentional array to feed multiple values to assert.
 */

class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }
 
    public function provider()
    {
        return array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 3)
        );
    }
}
?>