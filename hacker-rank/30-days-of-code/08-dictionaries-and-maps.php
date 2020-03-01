<?php
// REF: https://www.hackerrank.com/challenges/30-dictionaries-and-maps/problem

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$N = (int) fgets($_fp);
$map = [];
for ($i = 0; $i < $N; $i++) {
    $line = trim(fgets($_fp));
    $pieces = preg_split('/ /', $line);
    $map[$pieces[0]] = $pieces[1];
}

while (($name = trim(fgets($_fp))) !== '') {
    if (isset($map[$name])) {
        echo $name."=".$map[$name].PHP_EOL;
    } else {
        echo "Not found" . PHP_EOL;
    }
}
