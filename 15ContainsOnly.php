<?php

/**
 * assertContainsOnly(
 *      string $type, 
 *      Iterator|array $haystack[, 
 *      boolean $isNativeType = NULL, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if $haystack 
 * does not contain only variables of type $type.
 * $isNativeType is a flag used to indicate whether 
 * $type is a native PHP type or not.
 * 
 * assertNotContainsOnly() is the inverse of this 
 * assertion and takes the same arguments.
 * 
 * assertAttributeContainsOnly() and assertAttributeNotContainsOnly() 
 * are convenience wrappers that use a public, protected, or 
 * private attribute of a class or object as the haystack. 
 */
class ContainsOnlyTest extends PHPUnit_Framework_TestCase
{
    /**
     * This function is used to test function assertContainsOnly()
     * with native type only
     */
    public function testContainsOnly()
    {
        $heystack = array('1', '2', 3);
        
        #$heystack = array('1', '2', '3');
        #Uncommenting line above will pass this test;
        
        $this->assertContainsOnly('string', $heystack);
    }
    
    /**
     * I have no idea how this $is_native_type flag is getting used
     * @todo Need to figure out how $isNativeType flag is getting used
     */
    public function testContainsOnlyForNativeTypeOnly()
    {
        $heystack = array(new NotNativeType(), new NotNativeType(), new NotNativeType());
        
        $is_native_type = true;
        #$is_native_type = false;
        #Uncommenting line above should pass this test;
        
        $this->assertContainsOnly('NotNativeType', $heystack, $is_native_type);
        #This test is getting passed anyway with 
        #any value in $is_native_type variables :( . I dont
        #know where I am getting wrong. Will fix it after some
        #time.
    }
    
    public function testAssertAttributeContainsOnlyStatic(){
        /**
         * This test will pass
         */
        $this->assertAttributeContainsOnly('string','arr2',  'NotNativeType');
    }
    
    public function testAssertAttributeContainsOnly(){
        /**
         * This test will pass
         */
        $this->assertAttributeContainsOnly('string','arr1',  new NotNativeType);
    }
}

/**
 * Class to check non native type variables
 */
class NotNativeType{
    public $arr1 = array('1', '2', '3');
    public static $arr2 = array('1', '2', '3');
}
?>