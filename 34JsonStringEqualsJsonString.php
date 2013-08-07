<?php
/**
 * assertJsonStringEqualsJsonString(
 *      mixed $expectedJson, 
 *      mixed $actualJson[, 
 *      string $message = '']
 * )
 * 
 * Reports an error identified by $message if the value of $actualJson does 
 * not match the value of $expectedJson.
 * 
 */
class JsonStringEqualsJsonStringTest extends PHPUnit_Framework_TestCase
{
    /**
     * Pretty straight forward
     */
    public function testFailure()
    {
        $this->assertJsonStringEqualsJsonString(
          json_encode(array("Mascott" => "Tux")), json_encode(array("Mascott" => "ux"))
        );
    }
}
?>