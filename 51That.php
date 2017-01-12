<?php
/**
 * More complex assertions can be formulated using the PHPUnit_Framework_Constraint 
 * classes. They can be evaluated using the assertThat() method. 
 * Example below shows how the logicalNot() and equalTo() constraints can be used 
 * to express the same assertion as assertNotEquals().
 * 
 * assertThat(mixed $value, PHPUnit_Framework_Constraint $constraint[, $message = ''])
 * Reports an error identified by $message if the $value does not match the $constraint. 
 */

/*
 * Constraint ==> Meaning
 * ----------------------
 * 
 * PHPUnit_Framework_Constraint_Attribute attribute(
 *      PHPUnit_Framework_Constraint $constraint, 
 *      $attributeName
 * ) 
 * ==> Constraint that applies another constraint to an attribute of a class or an object.
 * 
 * PHPUnit_Framework_Constraint_IsAnything anything() 
 * ==> Constraint that accepts any input value.
 * 
 * PHPUnit_Framework_Constraint_ArrayHasKey arrayHasKey(mixed $key) 	
 * ==> Constraint that asserts that the array it is evaluated for has a given key.
 * 
 * PHPUnit_Framework_Constraint_TraversableContains contains(mixed $value) 	
 * ==> Constraint that asserts that the array or object that implements the 
 *     Iterator interface it is evaluated for contains a given value.
 * 
 * PHPUnit_Framework_Constraint_TraversableContainsOnly containsOnly(string $type) 	
 * ==> Constraint that asserts that the array or object that implements the 
 *     Iterator interface it is evaluated for contains only values of a given type.
 * 
 * PHPUnit_Framework_Constraint_TraversableContainsOnly containsOnlyInstancesOf(string $classname)
 * ==> Constraint that asserts that the array or object that implements the 
 *     Iterator interface it is evaluated for contains only instances of a given classname.
 * 
 * PHPUnit_Framework_Constraint_IsEqual equalTo($value, $delta = 0, $maxDepth = 10) 	
 * ==> Constraint that checks if one value is equal to another.
 * 
 * PHPUnit_Framework_Constraint_Attribute attributeEqualTo(
 *      $attributeName, 
 *      $value, 
 *      $delta = 0, 
 *      $maxDepth = 10
 * ) 	
 * ==> Constraint that checks if a value is equal to an 
 *     attribute of a class or of an object.
 * 
 * PHPUnit_Framework_Constraint_FileExists fileExists() 	
 * ==> Constraint that checks if the file(name) that it is evaluated for exists.
 * 
 * PHPUnit_Framework_Constraint_GreaterThan greaterThan(mixed $value) 	
 * ==> Constraint that asserts that the value it is 
 *     evaluated for is greater than a given value.
 * 
 * PHPUnit_Framework_Constraint_Or greaterThanOrEqual(mixed $value) 	
 * ==> Constraint that asserts that the value it is evaluated 
 *     for is greater than or equal to a given value.
 * 
 * PHPUnit_Framework_Constraint_ClassHasAttribute classHasAttribute(string $attributeName) 	
 * ==> Constraint that asserts that the class it is evaluated for has a given attribute.
 * 
 * PHPUnit_Framework_Constraint_ClassHasStaticAttribute classHasStaticAttribute(
 *      string $attributeName
 * ) 	
 * ==> Constraint that asserts that the class it is 
 *     evaluated for has a given static attribute.
 * 
 * PHPUnit_Framework_Constraint_ObjectHasAttribute hasAttribute(string $attributeName) 	
 * ==> Constraint that asserts that the object it is evaluated for has a given attribute.
 * 
 * PHPUnit_Framework_Constraint_IsIdentical identicalTo(mixed $value) 	
 * ==> Constraint that asserts that one value is identical to another.
 * 
 * PHPUnit_Framework_Constraint_IsFalse isFalse() 	
 * ==> Constraint that asserts that the value it is evaluated is FALSE.
 * 
 * PHPUnit_Framework_Constraint_IsInstanceOf isInstanceOf(string $className) 	
 * ==> Constraint that asserts that the object it is evaluated for is an 
 *     instance of a given class.
 * 
 * PHPUnit_Framework_Constraint_IsNull isNull() 
 * ==> Constraint that asserts that the value it is evaluated is NULL.
 * 
 * PHPUnit_Framework_Constraint_IsTrue isTrue() 
 * ==> Constraint that asserts that the value it is evaluated is TRUE.
 * 
 * PHPUnit_Framework_Constraint_IsType isType(string $type) 	
 * ==> Constraint that asserts that the value it is 
 *     evaluated for is of a specified type.
 * 
 * PHPUnit_Framework_Constraint_LessThan lessThan(mixed $value) 	
 * ==> Constraint that asserts that the value it is 
 *     evaluated for is smaller than a given value.
 * 
 * PHPUnit_Framework_Constraint_Or lessThanOrEqual(mixed $value) 
 * ==> Constraint that asserts that the value it is evaluated 
 *     for is smaller than or equal to a given value.
 * 
 * logicalAnd() ==> Logical AND.
 * 
 * logicalNot(PHPUnit_Framework_Constraint $constraint) ==> Logical NOT.
 * 
 * logicalOr() ==> Logical OR.
 * 
 * logicalXor() ==> Logical XOR.
 * 
 * PHPUnit_Framework_Constraint_PCREMatch matchesRegularExpression(string $pattern) 
 * ==> Constraint that asserts that the string it is 
 *     evaluated for matches a regular expression.
 * 
 * PHPUnit_Framework_Constraint_StringContains stringContains(
 *      string $string, 
 *      bool $case
 * ) 
 * ==> Constraint that asserts that the string it is 
 *     evaluated for contains a given string.
 * 
 * PHPUnit_Framework_Constraint_StringEndsWith stringEndsWith(string $suffix) 	
 * ==> Constraint that asserts that the string it 
 *     is evaluated for ends with a given suffix.
 * 
 * PHPUnit_Framework_Constraint_StringStartsWith stringStartsWith(string $prefix) 
 * ==> Constraint that asserts that the string it 
 *     is evaluated for starts with a given prefix.
 *  
 */

class BiscuitTest extends PHPUnit_Framework_TestCase
{
    public function testEquals()
    {
        $theBiscuit = new Biscuit('Ginger');
        $myBiscuit  = new Biscuit('Ginger');
 
        $this->assertThat(
          $theBiscuit,
          $this->logicalNot(
            $this->equalTo($myBiscuit)
          )
        );
    }
}
class Biscuit{
    public $type;
    public function __construct($type) {
        $this->type = $type;
    }
}
?>