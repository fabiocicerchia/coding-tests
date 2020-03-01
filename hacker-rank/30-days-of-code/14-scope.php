<?php
// REF: https://www.hackerrank.com/challenges/30-scope/problem

class Difference
{
    private $elements=array();
    public $maximumDifference;


    public function __construct($elements)
    {
        $this->elements = $elements;
        $this->maximumDifference = 0;
    }

    public function computeDifference()
    {
        $max = count($this->elements);
        for ($i = 0; $i < $max; $i++) {
            for ($j = $i+1; $j < $max; $j++) {
                if (($diff = abs($this->elements[$i] - $this->elements[$j])) > $this->maximumDifference) {
                    $this->maximumDifference = $diff;
                }
            }
        }
    }

    // Write your code here
} //End of Difference class


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print($d->maximumDifference);
