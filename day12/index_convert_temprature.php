<?php

    require_once('functions.php');
    
    $vlaue = 1;
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
    <div class="container">
        <div class="hola">
            <form name="form" action="" method="post">
                <p>Fahrenheit temparature: <input type="text" class="alineados" name="subject"></p>
                <input type="submit">
            </form>
        </div>

        <div class="hola">
            <?php 
                
                $new_variable = $_POST['subject'];
                $new_variable_converted = ($new_variable -32) / 1.8;

            ?>    
            
            <p>Celcius temparature: <?php echo $new_variable_converted; ?></p>
        </div>
        
   </div>     


</body>
</html>
