<?php
// REF: https://www.hackerrank.com/challenges/30-more-exceptions/problem

//Enter your code here
class Calculator
{
    public function power($n, $p)
    {
        if ($n < 0 || $p < 0) {
            throw new Exception('n and p should be non-negative');
        }
        if ($p > 0) {
            $n = $this->power($n, $p - 1) * $n;
            return $n;
        }

        return 1;
    }
}

$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while ($T-->0) {
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try {
        $ans=$myCalculator->power($n, $p);
        echo $ans."\n";
    } catch (Exception $e) {
        echo $e->getMessage()."\n";
    }
}
