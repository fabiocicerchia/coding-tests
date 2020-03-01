<?php
// REF: https://www.hackerrank.com/challenges/30-hello-world/problem

$_fp = fopen("php://stdin", "r");

$inputString = fgets($_fp); // get a line of input from stdin and save it to our variable

// Your first line of output goes here
print("Hello, World.\n");

// Write the second line of output
echo $inputString . PHP_EOL;

fclose($_fp);
