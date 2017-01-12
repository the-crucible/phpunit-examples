<?php
/**
 * assertContains(
 *      mixed $needle, 
 *      Iterator|array $haystack[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if 
 * $needle is not an element of $haystack.
 * 
 * assertNotContains() is the inverse of this 
 * assertion and takes the same arguments.
 * 
 * assertAttributeContains() and assertAttributeNotContains()
 * are convenience wrappers that use a public, protected, or 
 * private attribute of a class or object as the haystack.
 *  
 */
class ContainsTest extends PHPUnit_Framework_TestCase
{
    /**
     * This test will use assertContains() function on 
     * a array and see how it works
     */
    
    public function testArraySearch()
    {
        $arr = array(1, 2, 3);
        
        #$arr[] = 4;
        #Uncommenting line above will pass the test
        
        $this->assertContains(4, $arr);
    }
    
    /**
     * This test will use assertContains() function on a 
     * string and see how it works
     */
    
    public function testStringSearch()
    {
        $str = 'bar';
        
        #$str = 'foobar';
        #Uncommenting line above will pass the test
        
        $this->assertContains('foo',$str);
    }
    
    /**
     * This function will test assertAttributeContains for
     * objects and public, private and protected variables
     */
    public function testContainAttribute(){
        $obj = new ContainClass();
        
        $needle = 4;
        
        #$needle = 3;
        #Uncommenting line above will pass the test
        
        $this->assertAttributeContains($needle, 'arr2' , $obj);
    }
    
    /**
     * This function will test assertAttributeContains for
     * objects and public, private and protected variables
     */
    public function testContainStaticVar(){
        
        $needle = 4;
        
        #$needle = 3;
        #Uncommenting line above will pass the test
        
        $this->assertAttributeContains($needle, 'arr1' , 'ContainClass' );
    }
}

class ContainClass{
    public static $arr1 = array(1, 2, 3);
    public $arr2 = array(1, 2, 3);
}
?>