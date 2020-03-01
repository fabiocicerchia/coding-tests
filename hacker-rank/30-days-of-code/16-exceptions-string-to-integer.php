<?php
// REF: https://www.hackerrank.com/challenges/30-exceptions-string-to-integer/problem

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $S);

$converted = strval(intval($S));
echo $converted === $S ? $converted : "Bad String";

fclose($handle);
