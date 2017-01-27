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

        $array = array();
        var_show($array); 

        $array[] = 'first';
        var_show($array); 

        $array[] = 'second';
        var_show($array); 

        $array['my key'] = 'my value';
        var_show($array);

        $array[] = 'next';
        var_show($array); 

        $array[123] = 'value';
        var_show($array); 

        var_show($array[123]); 

        $array[] = $array;
        var_show($array); 
     
     ?>
    
    


</body>
</html>