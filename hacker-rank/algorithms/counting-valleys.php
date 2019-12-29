<?php
// REF: https://www.hackerrank.com/challenges/counting-valleys/problem

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $level = 0;
    $valleys = 0;

    for ($i = 0; $i < $n; $i++) {
        $step = $s[$i];
        if ($step === 'U') {
            $level += 1;
            if ($level === 0) $valleys++;
        } elseif ($step === 'D') $level -= 1;
    }

    return $valleys;
}

/*/ ----- TESTING

$errors = [];
function test($expected, $returned) { global $errors; if ($expected === $returned) { echo '.'; } else { $errors[] = "Expected '$expected' is !== '$returned'"; echo 'F'; } }

test(0, countingValleys(1, 'U'));
test(0, countingValleys(1, 'D'));
test(0, countingValleys(4, 'UUUU'));
test(0, countingValleys(4, 'DDDD'));
test(1, countingValleys(2, 'DU'));
test(0, countingValleys(3, 'DDU'));
test(1, countingValleys(4, 'DDUU'));
test(2, countingValleys(4, 'DUDU'));
test(3, countingValleys(6, 'DUDUDU'));
test(1, countingValleys(6, 'DDDUUU'));
test(2, countingValleys(8, 'DDDUUUDU'));

if ($errors) var_dump($errors);
exit; /*/

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
