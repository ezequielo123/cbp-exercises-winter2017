<?php

    require_once('functions.php');

    $my_greeting = 'Bootcamp 2017';


    $first_name = 'Ezequiel';
    $surname = 'Orozco';
    $year_of_birth = 1987;
    $height = '1.80';
    
    $my_greeting = 'Bootcamp 2017';
    $my_os = 'Windows 10';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Practice</title>
    <style>
        .container {
            display: flex;
         }

         .hola {
            background-color: grey;
         }

         .alineados {
            margin-right: 25px;
         }
    </style>
</head>
<body>
    <p><?php check_name(); ?></p>
    <div class="container">
        <div class="hola">
            <form name="form" action="" method="post">
                <p>Name: <input type="text" class="alineados" name="subject"></p>
                <p>Surmane: <input type="text" class="alineados" name="subject1"></p>
                <p>Year of Birth: <input type="text" class="alineados" name="subject2"></p>
                <p>Height: <input type="text" class="alineados" name="subject3"></p>
                <input type="submit">
            </form>
        </div>

        <div class="hola">
            <h1><?php echo($my_greeting); ?></h1>
            <p>First name: <?php echo $_POST['subject']; ?></p>
            <p>Surname: <?php echo $_POST['subject1']; ?></p>
            <p>Year of birth: <?php echo $_POST['subject2']; ?></p>
            <p>Height: <?php echo $_POST['subject3']; ?></p>
            <p>Operating System: <?php echo($my_os); ?></p>
        </div>
        
   </div>        
    
</body>
</html>
