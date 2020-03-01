<?php
// REF: https://www.hackerrank.com/challenges/30-binary-search-trees/problem

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

    public function getHeight($root, $hops = 0)
    {
        if ($root === null) {
            return $hops - 1;
        } // minus 1 node
        $left = $this->getHeight($root->left, $hops + 1);
        $right = $this->getHeight($root->right, $hops + 1);

        return $left > $right ? $left : $right;
    }
}//End of Solution

$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while ($T-->0) {
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root, $data);
}
$height=$myTree->getHeight($root);
echo $height;
