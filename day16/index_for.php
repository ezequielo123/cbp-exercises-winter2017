<?php

    $movies = array(
        'The Shawshank redemption',
        'The Godfather',
        'The Godfather II',
        'Dark Knight', 
        '12 angry men', 
        'Schindler\'s list',
        'Pulp fiction',
        'Lord of the Rings: Return of the King',
        'The good, the bad and the ugly',
        'Fight club'
    );

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <ol>
    <?php for ($i = 0; $i < count($movies,0); $i++) : ?>

        <li><?php echo $movies[$i]; ?></li>

    <?php endfor; ?>   
    </ol> 

    <?php 

        sort($movies);
    ?>      

    <ol>
    <?php foreach($movies as $value) : ?>

        <li><?php echo $value; ?></li>

    <?php endforeach; ?> 
    </ol>
      

</body>
</html>