<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

define('DS', DIRECTORY_SEPARATOR);
define('D_DIR', dirname(__FILE__) . DS . 'fixtures' . DS);
define('L_DIR', dirname(__FILE__) . DS . 'lib' . DS);

class DBSimpleTest extends PHPUnit_Extensions_Database_TestCase {

    public static $pdo = null;
    private $conn = null;

    public function getConnection() {
        if ($this->conn == null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO("mysql:host=localhost;dbname=test_pdo", 'root', "password");
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, 'test_pdo');
        }
        return $this->conn;
    }

    public function getDataSet() {
        /**
         * You can choose any one of the below datasets
         */
        #return $this->getFlatXmlDataset();
        #return $this->getStandardXmlDataset();
        #return $this->getMysqlXmlDataset();
        #return $this->getYmlDataset();
        #return $this->getCsvDataSet();
        return $this->getArrayDataset();
        #return $this->getQueryDataset();
        #return $this->getDbDataSet();
        #return $this->getReplacementDataset();
        #return $this->getFilterDataset();
        #return $this->getCompositeDataset();
    }

    private function getFlatXmlDataset() {
        return $this->createFlatXmlDataSet(D_DIR . "myFlatXmlFixture.xml");
    }

    private function getStandardXmlDataset() {
        return $this->createXMLDataSet(D_DIR . "myXmlDataset.xml");
    }

    private function getMysqlXmlDataset() {
        return $this->createMySQLXMLDataSet(D_DIR . "mySqldumpXmlDataset.xml");
    }

    private function getYmlDataset() {
        return new PHPUnit_Extensions_Database_DataSet_YamlDataSet(D_DIR . 'myDataSet.yml');
    }

    private function getCsvDataSet() {
        $dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet();

        $dataSet->addTable("class", D_DIR . 'class.csv');
        $dataSet->addTable("user", D_DIR . 'user.csv');
        $dataSet->addTable("address", D_DIR . 'address.csv');

        return $dataSet;
    }
    
    private function getArrayDataset() {

        require_once L_DIR . 'ArrayDataset.php';

        return new MyApp_DbUnit_ArrayDataSet(array(
            'user' => array(
                array('id' => 1, 'name' => 'one'),
                array('id' => 2, 'name' => 'two')
            ),
            'class' => array(
                array('id' => 1, 'uid' => 1, 'class' => 1, 'age' => 5),
                array('id' => 2, 'uid' => 2, 'class' => 6, 'age' => 13),
            ),
            'address' => array()
        ));
    }

    private function getQueryDataset() {
        $ds = new PHPUnit_Extensions_Database_DataSet_QueryDataSet($this->getConnection());
        $ds->addTable('user');
        $ds->addTable('address');
        $ds->addTable('class');
        # It could be also
        # $ds->addTable('class',"Select * from class"); #This function get used further 
        return $ds;
    }
    
    private function getDbDataSet(){
        $tableNames = array('user','class');
        // We can also import data from another database by this way.
        return $dataSet = $this->getConnection()->createDataSet($tableNames);
    }
    
    
    
    private function getReplacementDataset(){
        /* 
         * This dataset is used to replace some data in a current dataset, one
         * of the powerfull usecase of this dataset is to implement null in flat
         * XML dataset. Below is the example code.
         * 
        $ds = $this->createFlatXmlDataSet('myFlatXmlFixture.xml');
        $rds = new PHPUnit_Extensions_Database_DataSet_ReplacementDataSet($ds);
        $rds->addFullReplacement('##NULL##', null);
        return $rds;
        */
        
        # But lets replace some name here only
        $arr_ds = $this->getArrayDataset();
        $rds = new PHPUnit_Extensions_Database_DataSet_ReplacementDataSet($arr_ds);
        $rds->addFullReplacement('two', 'two kumar');
        return $rds;
    }
    
    private function getFilterDataset(){
        
        #Example showing include block 
        /*  
        // Filtered Include dataset
        $dataSet = $this->getArrayDataset();

        $filterDataSet = new PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addIncludeTables(array('user'));
        $filterDataSet->setIncludeColumnsForTable('user', array('id'));
        return $filterDataSet;
        #*/
        
        #Example showing exclude block
        #/*
        // Filtered Exclude dataset
        $dataSet = $this->getArrayDataset();

        $filterDataSet = new PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addExcludeTables(array('user', 'address')); // only keep the guestbook table!
        $filterDataSet->setExcludeColumnsForTable('class', array('uid'));
        return $filterDataSet;
        #*/
    }
    
    private function getCompositeDataset(){
        $ds1 = $this->getFilterDataset();
        $ds2 = $this->createFlatXmlDataSet(D_DIR . "myFlatXml1.xml");
        
        #Combine them
        /**
         * It seems there is some change in the API lately
         * now the contructor PHPUnit_Extensions_Database_DataSet_CompositeDataSet
         * takes a array as input.
         * and you cannot combine two datasets having common tables.
         * This is not fair :-/
         */
        $compositeDs = new PHPUnit_Extensions_Database_DataSet_CompositeDataSet(array());
        $compositeDs->addDataSet($ds1);
        $compositeDs->addDataSet($ds2);

        return $compositeDs;
    }

    public function testUserRowCount() {
        $this->assertEquals(2,$this->getConnection()->getRowCount('user'),"User count not matching");
    }
    
    public function testUserEntry(){
        // This is coming right from the live databases
        $queryTable = $this->getConnection()->createQueryTable('user', "Select * from user");
        // Create a data set from the files/array to compare
        $expectedTable = $this->getArrayDataset()->getTable('user');
        
        //Earth is going to shake now
        $this->assertTablesEqual($expectedTable,$queryTable);
        //And it worked.. 
    }
    
    public function testWithDatasetOnly(){
        // Create a dataset from live table through sql dataset
        // This is also a kind of live data only
        
        $ds1 = new PHPUnit_Extensions_Database_DataSet_QueryDataSet($this->getConnection());
        $ds1->addTable('user');
        
        $ds2 = $this->getArrayDataset();
        $filterDataSet = new PHPUnit_Extensions_Database_DataSet_DataSetFilter($ds2);
        $filterDataSet->addIncludeTables(array('user'));
        
        $this->assertDataSetsEqual($ds1,$filterDataSet);
        
    }

}

?>
