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

        $merged = array_merge($cars_i_want, $cars_my_wife_wants);
        var_show($merged);

        arsort($merged);
        var_show($merged);

        $cars_i_can_stand = array_diff_key($merged, array_flip($cars_i_cant_stand));
        var_show($cars_i_can_stand);

        $car_we_will_get = array_pop();

     ?>
    
    


</body>
</html>