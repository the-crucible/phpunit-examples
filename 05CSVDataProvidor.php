<?php
/**
 * Data could be provided and fed into the test functions 
 * from other mediums also. Below is an example from where 
 * data is fed from a csv file. I 'guess' to do that either 
 * you have to return an array(which is pretty straight forward)
 * or you have to return an object whose class has implemented 
 * 'Iterator' interface. This people who have read Iterator design
 * pattern should know what I am talking about 
 */

define('DS' , DIRECTORY_SEPARATOR );
require dirname(__FILE__) . DS . 'lib' . DS . 'CsvFileIterator.php';
 
class CSVDataProvidorTest extends PHPUnit_Framework_TestCase
{
    /**
     * This is a test function which depends 
     * upon providor function
     * 
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }
 
    /**
     * This again is a providor function which return an object
     * and that object has implemented Iterator interface and 
     * design pattern and its 'current' attribute return an array 
     * which has 3 elements to fed into the testAdd function. 
     * CSV file is located in ./data/ folder
     * 
     * @return \CsvFileIterator
     */
    public function provider()
    {
        return new CsvFileIterator(dirname(__FILE__) . DS . "data" . DS . 'data.csv');
    }
}
?>