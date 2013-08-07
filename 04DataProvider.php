<?php
/**
 * This example show that how we can write functions which will act as
 * a data providor for another test.
 * 
 * The providor can send data in a array if we have to send multiple variables
 * and it may send multidimentional array to feed multiple values to assert.
 */

class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * This function will get data from its data providor function 'providor'.
     * The function name should be mentioned in the tag 'dataProvider' preceeded 
     * by its function name  
     * 
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }
 
    public function provider()
    {
        $return1 = array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 3)
        );
        
        $return2 = array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 2)
        );
        
        $return = $return1;
        //$return = $return2;
        //Uncommenting this line will pass this test
        return $return;
    }
}
?>