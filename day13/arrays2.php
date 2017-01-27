<?php

    $variable = 'Ezequiel';
    require_once('var_show.php');

    $fruit = array(
        'Apple',
        'Pear',
        'Orange',
        'Banana'
    );

    $fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
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

        var_show($fruit); 
        $max_value = max($fruit);
        $min_value = min($fruit);

        shuffle($fruit); // borra el indice numerico
        var_show($fruit);
        var_show($max_value);
        var_show($min_value);

        $my_new_array = array_slice($fruit, 1, 2);// crea un nuevo array con 3 argumentos (el array, desde donde, hasta donde)
        var_show($my_new_array);

        $firs_item = array_shift($fruit); //saca el primer elemento del array
        var_show($firs_item);
        var_show($fruit);

        array_unshift($fruit, 'Mango'); //agregar un nuevo elemento en el array al principio
        var_show($fruit);

        $last_item = array_pop($fruit);
        var_show($last_item);

     ?>
    
    


</body>
</html>