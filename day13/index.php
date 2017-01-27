<?php

    require_once('var_show.php');

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>

    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?page=form">Forms</a>
        <a href="index.php?page=contact">Contact</a>
    </nav>    

    <div>
        <?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
            <?php include('form.php'); ?>
        <?php elseif(isset($_GET['page']) && $_GET['page']=='contact') : ?>
            <?php include('contact.php'); ?>
        <?php else : ?>
            <p>This is home.</p>
        <?php endif; ?>
    </div>
    
</body>
</html>

