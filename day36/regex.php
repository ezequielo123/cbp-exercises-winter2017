<?php

$pattern = '#^\s+ab{2}.#i';

$string = ' ABbrs';

$result = preg_match($pattern, $string, $matches);

var_dump($result);
var_dump($matches);

echo isset($matches[0]);