<?php
$studentGrades = [
    ["math" => 80, "english" => 96, "science" => 95],
    ["math" => 81, "english" => 97, "science" => 96],
    ["math" => 82, "english" => 98, "science" => 97],
];

function avg($grades)
{
    foreach ($grades as $student) {
        $total = 0;
        $numSubjects = count($student);
        
        foreach ($student as $subject => $grade) {
            $total += $grade;
        }
        
        $average = $total / $numSubjects;
        
        echo "Average" . round($average, 2) . "\n";
    }
}

avg($studentGrades);
?>