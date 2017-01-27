<form action="" method="post">
    Product: <input type="text" name="product"><br><br>
    Color: <input type="text" name="color"><br><br>
    <label for="really-on">Really? </label><input type="checkbox" name="really" id="really-on" checked><br><br>

    Country: <label for="country-cz">CZ</label><input type="radio" name="country" value="CZ" id="country-cz"><label for="country-cz"><label for="country-us">US</label></label><input type="radio" name="country" value="US" checked id="country-us"><br><br>
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
            
            <h1 style="color:red"><em><strong><hr>Your order:<hr></strong></em></h1><p><?php echo show_products($new_variable, $new_variable2, $new_variable4); ?></p>
</div>