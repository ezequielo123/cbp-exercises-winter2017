<?php

require_once './shared/database.php';
$db = new Database();

session_start();

require './shared/header.php'   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <style>
        .border-input {
            border: 2px solid black;
            box-shadow: 10px 10px 5px #888888;
        }
        h2 {
            text-align: center;
            color: black;
            padding-bottom: 10px;
        }
        .new-form {
            display: flex;
            justify-content: space-around;
        }
        .para {
            font-size: 16px;
        } 

        .above-left {
            display: flex;
            justify-content: space-between;
            padding-right: 5px;
            padding-top: 35px;
            padding-left: 200px;
        }
        .space {
            padding-right: 8px;
            padding-bottom: 15px;
        }
        .container {
            padding-top: 40px;
        }
        .headers {
            font-size: 18px;
            font-weight: bold;
        }
        .amazon {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <hr>
        <div class="amazon">
            <h2 style="color:orange"><strong>Amazon 2</strong></h2>
        </div> 
        
            <table class="table table-responsive">
                <tr>
                    <td class="warning">Product Name</td>
                    <td class="success">Product Price</td>
                </tr> 
                <tr>
                    <?php 
                    
                    foreach ($_SESSION['products'] as $id) {
                        $product = $db->getproduct($id);
                        echo '<tr><td class="success">' . htmlspecialchars($product['name'])
                            . '</td><td class="warning">' 
                            . htmlspecialchars($product['price'])
                            . '</td></tr>';
                    }
                    ?>
                </tr> 
             </table>           
        <div class="above-left">
            <a href="index.php" class="space"><button type="button" class="btn btn-primary">Keep shopping</button></a>
            <form action="checkout.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="submit" class="btn btn-primary" value="Checkout" name="submit">
            </form>    
        </div>
    </div>
    
</body>
</html>