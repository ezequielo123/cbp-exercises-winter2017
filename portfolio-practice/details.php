<?php

    require_once('lib/data-functions.php');

    $data = get_data($_GET['id']);
    

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>

    <div>
        
        <h1><?php echo $data['name']; ?></h1>
        <p><?php echo $data['surname']; ?></p>

        <p><?php echo $data['gender']; ?></p>
        <p><?php echo $data['age']; ?></p>

    </div>       
    
</body>
</html>

