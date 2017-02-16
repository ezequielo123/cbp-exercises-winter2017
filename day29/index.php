<?php
session_start();
require_once './shared/database.php';
$db = new Database();
$products = $db->getproducts();

if ($_POST) {
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
    }   
    $_SESSION['products'][] = $_POST['id']; 
    header('Location: index.php');
}

require './shared/header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="admin-panel">
    </div>
    <div class="container">  
        <hr>
        <div class="amazon">
            <h2 style="color:orange"><strong>Amazon 2</strong></h2>
        </div>    
        <table class="table">
            <tr>
                <td><span class="headers">Product ID</span></td>
                <td><span class="headers">Product Name</span></td>
                <td><span class="headers">Product Price</span></td>
                <td><span class="headers">Product Size</span></td>
                <td><span class="headers">Product Color</span></td>
                <td></td>
            </tr> 
                    <?php
                        foreach ($products as $product) {
                            echo '<tr><td>' . htmlspecialchars($product['id']) 
                                . '</td><td>' . htmlspecialchars($product['name']) 
                                . '</td><td>' . htmlspecialchars($product['price']) 
                                . '</td><td>' . htmlspecialchars($product['size'])    
                                . '</td><td>' . htmlspecialchars($product['color']) 
                                . '</td><td>' 
                                . '<form action="" method="post">' 
                                . '<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                                . '<input type="submit" class="btn btn-primary" value="Buy item">'
                                . '</form></td></tr>';
                        }
                    ?>  
        </table>

    </div>

    
    <!--<div class="above-left">
        <a href="admin/addproduct.php" class="space"><button type="button" class="btn btn-primary">Add product</button></a>
        <a href="admin/editproduct.php" class="space"><button type="button" class="btn btn-info">Edit product</button></a>
        <a href="admin/removeproduct.php" class="space"><button type="button" class="btn btn-danger">Remove product</button></a>
    </div>-->
</body>
</html>