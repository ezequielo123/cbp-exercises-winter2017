<?php

    $variable = 'Ezequiel';
    require_once('var_show.php');

    $cars_i_want = array(
        'Porshe' => 2000000,
        'Ferrari' => 2500000,
        'Aston Martin' => 2800000,
        'Lamborghini' => 3500000,
        'Bugatti' => 16000000
    );

    $cars_my_wife_wants = array(
        'Smart' => 320000,
        'Mercedes' => 620000,
        'Toyota' => 480000,
        'Ford Mustang' => 1200000
    );
    $cars_i_cant_stand = array(
        'Smart'
    );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

    <?php

        echo '<ul>';
        foreach($cars_i_want as $one_item) {
            echo '<li>', 'Car price: ', $one_item, '</li>'; 
        }
        echo '</ul>';

     ?>
    
    


</body>
</html>