<?php

function divide($number_1, $number_2, & $remainder)
{ 
    $remainder = $number_1 % $number_2;
    return $number_1 / $number_2;

}    

$result_of_division = divide(3, 2, $remainder);

var_dump($result_of_division);
var_dump($remainder);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
        <br/>
       <?php echo $result_of_division; ?>

</body>
</html>