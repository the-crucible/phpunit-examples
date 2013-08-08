<?php
/**
 * This test revolve around one of the most important topics of unit tests
 * and it is called 'fixtures'. Well, fixtures are those common data which
 * is needed to fire each test method in a test class. Since each test method 
 * should require almost same type of data, phpunit created some template method 
 * to ensure that it happens. It may happen that you may require diffent fixture
 * or setUp() code for running your different test methods. If your code differ
 * slightly from test to test, move the defferent part into the test itself. If 
 * you need entirely different setup() code, in this case you should create your
 * different class to test that method mentioning the difference.
 * 
 * If you run this test you will know clearly that which template method is run 
 * at which phase of the entire life cycle of the test. Just do it and see it 
 * yourself.
 * 
 * These methods are
 * 1. setUpBeforeClass : Run at the very beginning and only once.
 * 2. setup: run before each test method
 * 3. assertPreConditions: run before each test
 * 4. assertPostConditions: run after each test if the test is successful
 * 5. onNotSuccessfulTest: run after each test if the test is not successful.
 * 6. tearDown: Run after each test 
 * 7. tearDownAfterClass : Run after all the tests are done.
 * 
 */

class TemplateMethodsTest extends PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    protected function setUp()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    protected function assertPreConditions()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    public function testOne()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(TRUE);
        $this->assertTrue(TRUE);
    }
 
    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(FALSE);
    }
    
    public function testThree()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(TRUE);
    }
 
    protected function assertPostConditions()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    protected function tearDown()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    public static function tearDownAfterClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
 
    protected function onNotSuccessfulTest(Exception $e)
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $e;
    }
}
?>