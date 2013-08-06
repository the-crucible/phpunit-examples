<?php
/**
 * assertContainsOnlyInstancesOf(string $classname, Traversable|array $haystack[, string $message = ''])
 * Reports an error identified by $message if $haystack does not contain only instances of class $classname. 
 */

class ContainsOnlyInstancesOfTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnlyInstancesOf('Foo', array(new Foo(), new Bar(), new Foo()));
    }
}

class Foo{
    
}
class Bar{
    
}
?>