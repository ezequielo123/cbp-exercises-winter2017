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
            padding-top: 25px;
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
                <p>Put your OS: <input type="text" class="alineados" name="subject"></p>
                <input type="submit">
            </form>
        </div>

        <div class="hola">
            <?php 
                
                $operating_system = $_POST['subject']; 

                switch($operating_system) {
                case 'Windows':
                    echo 'Your operating system is Windows.';
                    echo ' Browser: Edge';
                break; // mandatory
                case 'Linux':
                    echo 'Your operating system is Linux.';
                    echo ' Browser: Firefox';// code to run when value == value_2
                break;
                case 'OS X':
                    echo 'Your operating system is OS X.';
                    echo ' Browser: Safari';// code to run when value == value_3
                break;
                default:
                    echo 'Your operating system is not one of the good ones.';
                    echo ' Just use Chrome';// code to run when none of the previous conditions are true
                break;
                }   

            ?>    
            
            
        </div>
        
   </div>     


</body>
</html>