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
                <p>Put your height in cms (e.g.: 180): <input type="text" class="alineados" name="subject"></p>
                <input type="submit">
            </form>
        </div>

        <div class="hola">
            <?php 
                
                $new_variable = $_POST['subject'];
                
                function check_if_tall($new_variable) 
                {
                    if($new_variable > 180) {
                        echo 'a tall person';
                }   elseif($new_variable > 160)   {
                        echo 'ok...';
                }   else    {
                        echo 'a hobbit!';
                }  
                }      

            ?>    
            
            <p>You are: <?php echo check_if_tall($new_variable); ?></p>
        </div>
        
   </div>     


</body>
</html>