<form action="" method="post" enctype="multipart/form-data">
    Product: <input type="text" name="product" tabindex=1><br><br>
    Color: <input type="text" name="color" tabindex=3><br><br>
    <label for="really-on">Really? </label><input type="checkbox" name="really" id="really-on" checked tabindex=2><br><br>

    Country: <label for="country-cz">CZ</label><input type="radio" name="country" value="CZ" id="country-cz"><label for="country-cz"><label for="country-us">US</label></label><input type="radio" name="country" value="US" checked id="country-us"><br><br>
    City: <select name="city">
                <option value="BR">Brno</option>
                <option value="PR">Prague</option>
                <option value="OS">Ostrava</option>
           </select> <br><br>
    Files: <input type="file" name="afile">   <br><br>     
    Note: <textarea name="note">Leave a message</textarea>   <br><br>   
    <input type="submit" value="Submit">
</form>    

<div class="hola">
        <?php 
                
                $new_variable = $_POST['product'];
                $new_variable2 = $_POST['color'];

                $new_variable4 = $_POST['country'];
                $new_variable5 = $_POST['city'];
                $new_variable6 = $_POST['note'];

                
                function show_products($new_variable, $new_variable2, $new_variable4, $new_variable5, $new_variable6) 
                {
                    if (!empty($_POST['really'])) {
                        echo "Yes, I'm sure. <br>";
                        }
                    echo "Product: " .$new_variable . "<br> Color: " . $new_variable2 . "<br>Country: " . $new_variable4 . "<br>City: " . $new_variable5 . "<br>Note: " . $new_variable6;
                         
                }       

            ?>    
            
            <h1 style="color:red"><em><strong><hr>Your order:<hr></strong></em></h1><p><?php echo show_products($new_variable, $new_variable2, $new_variable4, $new_variable5, $new_variable6); ?></p>
</div>