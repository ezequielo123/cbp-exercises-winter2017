<?php

ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

//for development - all errors including strict errors
error_reporting(E_ALL | E_STRICT);


//for production services - it will how only notices not errors
error_reporting(E_ALL & E_NOTICE);

function dd($value)
{
    var_dump($value);
    die():
}
?>
