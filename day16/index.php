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
    <?php foreach($movies as $value) : echo '<li>'.$value.'</li>'; ?>

    <?php endforeach; ?>   
    </ol> 

    <ol>
        <?php foreach($movies as $movie_name) :  ?>
            <li><?php echo $movie_name; ?></li>
        <?php endforeach; ?>   
    </ol> 

</body>
</html>