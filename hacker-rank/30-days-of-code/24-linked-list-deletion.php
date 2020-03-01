<?php
// REF: https://www.hackerrank.com/challenges/30-linked-list-deletion/problem

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
    public function removeDuplicates($head)
    {
        if ($head->next === null) {
            return $head;
        }
        $head->next = $this->removeDuplicates($head->next);
        if ($head->next->data === $head->data) {
            $head->next = $head->next->next;
        }
        return $head;
    }

    public function insert($head, $data)
    {
        //complete this method
        $p=new Node($data);
        if ($head==null) {
            $head=$p;
        } elseif ($head->next==null) {
            $head->next=$p;
        } else {
            $start=$head;
            while ($start->next!=null) {
                $start=$start->next;
            }
            $start->next=$p;
        }
        return $head;
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
$head=$mylist->removeDuplicates($head);
$mylist->display($head);
