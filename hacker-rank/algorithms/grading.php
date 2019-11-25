<?php
// REF: https://www.hackerrank.com/challenges/grading/problem

/*
* Complete the 'gradingStudents' function below.
*
* The function is expected to return an INTEGER_ARRAY.
* The function accepts INTEGER_ARRAY grades as parameter.
*/

function gradingStudents($grades)
{
    for ($i = 0, $max = count($grades); $i < $max; $i++) {
        $grade = $grades[$i];

        if ($grade >= 38) {
            $roundUp = ((int) ($grade / 5) + 1) * 5;
            $diff = $roundUp - $grade;
            if ($diff < 3) {
                $grade = $roundUp;
            }
        }

        $grades[$i] = $grade;
    }

    return $grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
