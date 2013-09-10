<?php
namespace bst;


/**
 * Binary Search Tree Node
 * @author Joshua Ross <joshualross@gmail.com>
 */
class Node
{
    /**
     * Parent
     * @var Node
     */
    public $parent = null;

    /**
     * Left Child
     * @var Node
     */
    public $left = null;

    /**
     * Right Child
     * @var Node
     */
    public $right = null;

    /**
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}

