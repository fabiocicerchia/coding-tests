<?php
// REF: https://www.hackerrank.com/challenges/30-linked-list/problem

class Node
{
    public $data;
    public $next;
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}

class Solution
{
    public function insert($head, $data)
    {
        if ($head !== null) {
            $head->next = $this->insert($head->next, $data);
            return $head;
        }

        $next = new Node($data);
        return $next;
    }

    public function display($head)
    {
        $start=$head;
        while ($start) {
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}

$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while ($T-->0) {
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head, $data);
}
$mylist->display($head);
