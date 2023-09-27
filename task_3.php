<?php
$grades=[85,92,78,88,95];
function s($input_grades)
{
  
    arsort($input_grades);
    print_r($input_grades);
}
s($grades);