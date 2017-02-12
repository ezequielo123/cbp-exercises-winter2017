<?php 

$movie_name = 'Arrival';

$ratings = array(
    'user642'=>69,
    'user214'=>95,
    'user013'=>82
);



function print_rating($rating)
{
    return $rating . ' %';
}

$user_names = array(
        'user642' => 'Bob',
        'user214' => 'Stuart',
        'user013' => 'Kevin'
);


$user_name = $user_names['user214'];

function getusername_1($user_id)
{   
    $user_names = array(
        'user642' => 'Bob',
        'user214' => 'Stuart',
        'user013' => 'Kevin'
    );

    return $user_names['$user_id'];
}

function getusername($user_id)
{   
    global $user_names;
    
    return $user_names[$user_id];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
      <?php 
        foreach ($ratings as $user_id => $rating) 
        {
            echo getusername($user_id) . ' gave the movie a ' . print_rating($rating) . ' rating<br>';
        }
        ?>
</body>
</html>