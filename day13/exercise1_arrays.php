<?php

    $variable = 'Ezequiel';
    require_once('var_show.php');

    $cars_i_want = array(
        'Porshe',
        'Ferrari',
        'Aston Martin',
        'Lamborghini',
        'Bugatti'
    );

    $cars_i_have = array(
        'Ferrari',
        'Lamborghini'
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

        $cars_i_need_to_buy = array_diff(array_values($cars_i_want), array_values($cars_i_have));
        var_show($cars_i_need_to_buy); 

        shuffle($cars_i_need_to_buy);
        var_show($cars_i_need_to_buy);

        $first_item = array_shift($cars_i_need_to_buy);
        var_show($first_item);
        var_show($cars_i_need_to_buy);

     ?>
    
    


</body>
</html>