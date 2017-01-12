<?php

/**
 * assertTag(array $matcher, string $actual[, string $message = '', boolean $isHtml = TRUE])
 * Reports an error identified by $message if $actual is not matched by the $matcher.
 * $matcher is an associative array that specifies the match criteria for the assertion:
 * 
 *   1. id: The node with the given id attribute must match the corresponsing value.
 *   2. tag: The node type must match the corresponding value.
 *   3. attributes: The node's attributes must match the corresponsing values in the 
 *                  $attributes associative array.
 *   4. content: The text content must match the given value.
 *   5. parent: The node's parent must match the $parent associative array.
 *   6. child: At least one of the node's immediate children must meet the criteria 
 *             described by the $child associative array.
 *   7. ancestor: At least one of the node's ancestors must meet the criteria 
 *                described by the $ancestor associative array.
 *   8. descendant: At least one of the node's descendants must meet the 
 *                  criteria described by the $descendant associative array.
 *   9. children: Associative array for counting children of a node.
 *        a. count: The number of matching children must be equal to this number.
 *        b. less_than: The number of matching children must be less than this number.
 *        c. greater_than: The number of matching children must be greater than this number.
 *        d. only: Another associative array consisting of the keys to use to 
 *                 match on the children, and only matching children will be counted.
 *
 * assertNotTag() is the inverse of this assertion and takes the same arguments. 
 * 
 * @todo Need to play arround with all the possibility. I guess there is huge 
 * possibility here.
 */


class TagTest extends PHPUnit_Framework_TestCase {

    public function testFailure() {
        // Matcher that asserts that there is an element with an id="my_id".
        $matcher = array('id' => 'my_id');

        // Matcher that asserts that there is a "span" tag.
        $matcher = array('tag' => 'span');

        // Matcher that asserts that there is a "span" tag with the content
        // "Hello World".
        $matcher = array('tag' => 'span', 'content' => 'Hello World');

        // Matcher that asserts that there is a "span" tag with content matching the
        // regular expression pattern.
        $matcher = array('tag' => 'span', 'content' => 'regexp:/Try P(HP|ython)/');

        // Matcher that asserts that there is a "span" with an "list" class attribute.
        $matcher = array(
            'tag' => 'span',
            'attributes' => array('class' => 'list')
        );

        // Matcher that asserts that there is a "span" inside of a "div".
        $matcher = array(
            'tag' => 'span',
            'parent' => array('tag' => 'div')
        );

        // Matcher that asserts that there is a "span" somewhere inside a "table".
        $matcher = array(
            'tag' => 'span',
            'ancestor' => array('tag' => 'table')
        );

        // Matcher that asserts that there is a "span" with at least one "em" child.
        $matcher = array(
            'tag' => 'span',
            'child' => array('tag' => 'em')
        );

        // Matcher that asserts that there is a "span" containing a (possibly nested)
        // "strong" tag.
        $matcher = array(
            'tag' => 'span',
            'descendant' => array('tag' => 'strong')
        );

        // Matcher that asserts that there is a "span" containing 5-10 "em" tags as
        // immediate children.
        $matcher = array(
            'tag' => 'span',
            'children' => array(
                'less_than' => 11,
                'greater_than' => 4,
                'only' => array('tag' => 'em')
            )
        );

        // Matcher that asserts that there is a "div", with an "ul" ancestor and a "li"
        // parent (with class="enum"), and containing a "span" descendant that contains
        // an element with id="my_test" and the text "Hello World".
        $matcher = array(
            'tag' => 'div',
            'ancestor' => array('tag' => 'ul'),
            'parent' => array(
                'tag' => 'li',
                'attributes' => array('class' => 'enum')
            ),
            'descendant' => array(
                'tag' => 'span',
                'child' => array(
                    'id' => 'my_test',
                    'content' => 'Hello World'
                )
            )
        );

        // Use assertTag() to apply a $matcher to a piece of $html.
        $this->assertTag($matcher, $html);

        // Use assertTag() to apply a $matcher to a piece of $xml.
        $this->assertTag($matcher, $xml, '', FALSE);
    }
}

?>
