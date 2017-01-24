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


   <?php 

   function print_number($number_variable)
   {
       if($number_variable % 2 == 0) {
           echo 'even';
       } else {
           echo 'odd';  
       }
   }        
    ?>

    <div class="container">
        <div class="hola">
            <form name="form" action="" method="post">
                <p>Please enter a number: <input type="text" class="alineados" name="numbertest"></p>
                <input type="submit">
            </form>
        </div>

        <div class="hola">
            <?php 
                
                $number_variable = $_POST['numbertest'];
            ?>    
            
            <p>Is it an even or odd number? <?php print_number($number_variable); ?></p>
        </div>
        
   </div> 
    
</body>
</html>
