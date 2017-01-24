<?php

function get_current_year()
{
    return date('Y');
}

function print_current_year()
{
    echo get_current_year();
}

function print_greeting()
{
    global $my_greeting;

    echo $my_greeting;
}

function check_name()
{
    $a_number = 5;
    $b_number = $a_number * 2;
    $my_result = $b_number / 2;
    
    if($a_number > $my_result) {
        echo phpinfo();
    }    else {
         echo print_greeting();
    }
}
?>