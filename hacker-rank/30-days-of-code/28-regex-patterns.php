<?php
// REF: https://www.hackerrank.com/challenges/30-regex-patterns/problem

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

$list = [];

for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);

    $firstName = $firstNameEmailID[0];

    $emailID = $firstNameEmailID[1];
    if (preg_match('/@gmail\.com$/', $emailID)) {
        $list[] = $firstName;
    }
}

sort($list);
echo implode(PHP_EOL, $list);

fclose($stdin);
