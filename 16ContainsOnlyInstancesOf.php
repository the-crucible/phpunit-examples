<?php
/**
 * assertContainsOnlyInstancesOf(
 *      string $classname, 
 *      Traversable|array $haystack[, 
 *      string $message = ''])
 * 
 * Reports an error identified by $message if $haystack does
 * not contain only instances of class $classname. 
 */

class ContainsOnlyInstancesOfTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $arr = array(new Foo(), new Bar(), new Foo());
        
        #$arr = array(new Foo(), new Foo(), new Foo());
        # Uncommenting line above will  pass this test
        
        $this->assertContainsOnlyInstancesOf('Foo', $arr);
    }
}

if (!class_exists('Foo', FALSE)) {
	class Foo{
    
	}
}

if (!class_exists('Bar', FALSE)) {
	class Bar{
    
	}
}

?>