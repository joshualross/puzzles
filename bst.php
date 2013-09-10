<?php

require_once 'bst/Tree.php';
require_once 'bst/Node.php';

use bst\Tree;
use bst\Node;


$values = array(
    7,
    5,
    9,
    12,
    1,
    3,
);

$tree = new Tree();
foreach ($values as $value)
{
    $node = new Node($value);
    $tree->insert($node);
    if (null === $tree->lookup($value))
        echo 'FAILURE: insert <' . $value . '>';
}

foreach ($values as $value)
{
    if (null !== $tree->delete($value)->lookup($value))
        echo 'FAILURE: delete <' . $value . '>';
}


echo 'SUCCESS' . PHP_EOL;