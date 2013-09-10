<?php
namespace bst;

use bst\Node;

/**
 * Binary Search Tree
 * @author Joshua Ross <joshualross@gmail.com>
 */
class Tree
{
    /**
     * Root
     * @var Node
     */
    public $root = null;

    /**
     * Insert into tree
     * @param Node $node
     * @return \bst\Tree
     */
    public function insert(Node $node)
    {

        if ($this->root === null)
        {
            $this->root = $node;
            return $this;
        }

        $root = $this->root;
        while ($root !== null)
        {
            if ($root->value > $node->value)
            {
                if ($root->left === null) {
                    $node->parent = $root;
                    $root->left = $node;
                    return $this;
                }

                $root = $root->left;

            } else if ($root->value < $node->value) {
                if ($root->right === null) {
                    $node->parent = $root;
                    $root->right = $node;
                    return $this;
                }

                //traverse right
                $root = $root->right;
            } else {
                //matching value
                return $this;
            }
        }
    }

    /**
     * Perform a lookup, returning node if it exists
     * @param mixed $value
     * @return bst\Node
     */
    public function lookup($value)
    {
        if (null === $this->root)
            return $this->root;

        if ($this->root->value == $value)
            return $this->root;

        $root = $this->root;
        while ($root !== null)
        {
            if ($root->value == $value)
                break;

            //we are larger than the value, go left
            if ($root->value > $value)
                $root = $root->left;
            else //go right
                $root = $root->right;
        }

        return $root;
    }


    /**
     * Takes the value of the node to delete
     * @param mixed $value
     * @return \bst\Tree
     */
    public function delete($value)
    {
        $node = $this->lookup($value);

        if ($node === null)
            return $this;

        //do we have children?
        if ($node->left !== null) {
            //if rightmost has a left then the left becomes our node
            $newNode = $this->findRightMost($node->left);

        } else if ($node->right !== null) {

            $newNode = $this->findLeftMost($node->right);
        } else {//we're a leaf node
            $newNode = null;
        }

        //update parent
        if ($node->parent === null) { //root!
            $this->root = $newNode;

            if ($newNode === null) //empty tree!
                return $this;

            $newNode->parent = null;
        } else {
            $newNode->parent = $node->parent;

            //are we left or right?
            if ($node->parent->left == $node) {
                $node->parent->left = $newNode;//left
            } else {
                $node->parent->right = $newNode;//right
            }
        }

        return $this;

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


    /**
     * To string
     * @return string
     */
    public function toString()
    {

    }
}