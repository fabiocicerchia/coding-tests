<?php
// REF: https://www.hackerrank.com/challenges/30-binary-trees/problem

class Node
{
    public $left;
    public $right;
    public $data;
    public function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}

class Solution
{
    public function insert($root, $data)
    {
        if ($root==null) {
            return new Node($data);
        } else {
            if ($data<=$root->data) {
                $cur=$this->insert($root->left, $data);
                $root->left=$cur;
            } else {
                $cur=$this->insert($root->right, $data);
                $root->right=$cur;
            }
            return $root;
        }
    }


    public function levelOrder($root)
    {
        $queue = [$root];
        while ($queue !== []) {
            $node = array_shift($queue);
            echo $node->data . ' ';
            if ($node->left) {
                $queue[] = $node->left;
            }
            if ($node->right) {
                $queue[] = $node->right;
            }
        }
    }
}//End of Solution

$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while ($T-->0) {
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root, $data);
}
$myTree->levelOrder($root);
