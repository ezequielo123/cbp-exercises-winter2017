<form action="" method="post">
    Product: <input type="text" name="product"><br><br>
    Color: <input type="text" name="color"><br><br>
    Really? <input type="checkbox" name="really"><br><br>
    Country: CZ<input type="radio" name="country" value="CZ">US<input type="radio" name="country" value="US" checked><br><br>
    <input type="submit" value="Submit">
</form>    

<div class="hola">
        <?php 
                
                $new_variable = $_POST['product'];
                $new_variable2 = $_POST['color'];

                $new_variable4 = $_POST['country'];

                
                function show_products($new_variable, $new_variable2, $new_variable4) 
                {
                    if (!empty($_POST['really'])) {
                        echo "Yes, I'm sure. <br>";
                        }
                    echo "Product: " .$new_variable . "<br> Color: " . $new_variable2 . "<br>Country: " . $new_variable4;
                         
                }       

            ?>    
            
            <p>Your order:<br><br> <?php echo show_products($new_variable, $new_variable2, $new_variable4); ?></p>
</div>