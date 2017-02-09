<?php

require_once 'vehicle_class.php';
require_once 'car_class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Practice</title>
</head>
<body>

        <?php
            $vehicle = new vehicle();
            $vehicle->avg_speed = 60;

            echo $vehicle->travel(150);
            



            $car = new car();
            $car->setColor('red');
            echo $car->getcolor();
             

         ?>   

         


           
</body>
</html>
