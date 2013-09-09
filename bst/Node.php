<?php

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
}



<?php

class Tree
{
    public $root = null;

    public function insert (Node $node)
    {

        if ($this->root === null)
        {
            $this->root = $node;
            return $this;
        }

        $currentRoot = $this->root;
        while (true)
        {
            if ($currentRoot->value > $node->value)
            {
                if ($currentRoot->left === null) {
                    $node->parent = $currentRoot;
                    $currentRoot->left = $node;
                    return $this;
                }

                $currentRoot = $currentRoot->left;

            } else if ($currentNode->value < $node->value) {
                if ($currentRoot->right === null) {
                    $node->parent = $currentRoot;
                    $currentRoot->right = $node;
                    return $this;
                }

                //traverse right
                $currentRoot = $currentRoot->right;
            } else {
                //matching value
                return $this;
            }

        }
    }


    public function delete(Node $node)
    {
        //find the node we want to delete
        //then find the right most node of the left, if exists
        //or the left most node of the right, if exists

        $root = $this->root;
        while (true)
        {
            if ($root->value == $node->value)
            {
                if ($root->left != null) {
                    $node = $this->findRightMost($root->left);
                    $node->left = $this->root->left;
                    $root = $node;
                    //@ignores right child
                } else {
                    //can apply to
                }


            }

        }


        $root = $this->root;


        while (true)
        {
            if ($root->value == $node->value)
        }


    }


    public function findLeftMost(Node $node)
    {
        //we want to go all the way to the left of this node
        while ($node->left != null)
            $node = $node->left;
        return $node;
    }

    public function findRightMost(Node $node)
    {
        while ($node->right != null)
            $node = $node->right;

        return $node;
    }




}


class Node
{
    public $parent = null;
    public $left = null;
    public $right = null;
    public $value = null;

    public function __construct($value)
    {
        $this->value = $value;
    }


}



$tree = new Tree();
$node = new Node(7);
$tree->insert($node);
if ($node->value != $tree->root->value)
    echo 'fail' . PHP_EOL;

$node = new Node(5);
$tree->insert($node);
if ($node->value != $tree->root->left->value)
    echo 'fail' . PHP_EOL;

$node = new Node(9);
$tree->insert($node);
if ($node->value != $tree->root->right->value)
    echo 'fail' . PHP_EOL;



echo 'SUCCESS' . PHP_EOL;









