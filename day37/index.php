<?php

require_once 'animal.class.php';
require_once 'food.class.php';
require_once 'elephant/elephant.class.php';
require_once 'elephant/food.class.php';
require_once 'giraffe/giraffe.class.php';
require_once 'giraffe/food.class.php';

/*--- write your code ONLY between here ---*/

use giraffe_module\giraffe as giraffe;
use elephant_module\elephant as elephant;

/*--- and here ---*/

$elephant = new elephant();
$elephant->feed();

$giraffe = new giraffe();
$giraffe->feed();

if($elephant->getStomachContents() == 'peanuts')
{
    echo 'Elephant module implemented correctly!<br>';
}
else
{
    echo 'ERROR in elephant module\'s implementation!<br>';
}

if($giraffe->getStomachContents() == 'leaves')
{
    echo 'Giraffe module implemented correctly!<br>';
}
else
{
    echo 'ERROR in giraffe module\'s implementation!<br>';
}