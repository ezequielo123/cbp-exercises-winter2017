<?php 
    $order = array(
        array(
            'item' => 'Macbook Air',
            'price' => 156450,
            'count' => 15,
        ),
        array(
            'item' => 'Apple TV',
            'price' => 4562,
            'count' => 22,
        ),
        array(
            'item' => 'Router',
            'price' => 668,
            'count' => 45,
        ),
        array(
            'item' => 'Toys',
            'price' => 78,
            'count' => 56,
        ),
        array(
            'item' => 'Green Bastard',
            'price' => 12,
            'count' => 'not available at the moment',
        ),       
);   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>    
</head>

<style>
        .container {
            width: 150px;
            height: 50px;
        }   
        .container2 {
            float: right;
        }  
</style>

<body>
    <div class="containers">
        <div class="container">
        <?php

            $total = 0;
            foreach ($order as $prod) {
                $total = $total + $prod['price'];
                echo "<p><em><strong>Im buying a/an: <p style='color:blue'>" . $prod['item'] . "<br>Price: " . $prod['price'] . "<br>Availability: " . $prod['count'] . "</em></strong></p><br><hr>"; 
            }  
            
        ?>
        </div>
        <div class="container2">
        <?php
            echo "<p><em><strong>Total Price: " . $total . "</em></strong></p>";
            ?>
        </div>
    </div>    
</body>
</html>
