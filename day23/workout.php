<?php

$course_name = 'Coding Bootcamp';
$my_name = 'Ezequiel Orozco';
$result = 11 - 3;
$instructors = array(
                1 => 'Jan',
                2 => 'Daniel',
                3 => 'Michal',
                4 => 'Jakub'
);

function greet_me()
{
        echo 'Good morning Prague';
}

//greet_me();

$my_greeting = 'Good morning ' . $my_name;
//echo $my_greeting;

sort($instructors);

foreach ($instructors as $name)
{
       echo greet_someone($name) . '<br>';
}

function greet_someone($someone)
{
        return 'Good morning ' . $someone;
}