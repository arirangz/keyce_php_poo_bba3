<?php

$students = [
    ["first_name" => "John", "mark" => 50],
    ["first_name" => "Jane", "mark" => 83],
    ["first_name" => "Will", "mark" => 45],
    ["first_name" => "Emilia", "mark" => 72],
];

function getBestMark(array $students) {
    $best_mark = 0;
    foreach($students as $student) {
        if ($student['mark'] > $best_mark) {
            $best_mark = $student['mark'];
        }
    }
    return $best_mark;
}

echo getBestMark($students);

?>