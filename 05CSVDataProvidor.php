<?php
define('DS' , DIRECTORY_SEPARATOR );
require dirname(__FILE__) . DS . 'lib' . DS . 'CsvFileIterator.php';
 
class DataTest1 extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        //echo "$c, $a , $b " . ($a + $b) . "\n";
        $this->assertEquals($c, $a + $b);
    }
 
    public function provider()
    {
        return new CsvFileIterator(dirname(__FILE__) . DS . data . DS . 'data.csv');
    }
}
?>