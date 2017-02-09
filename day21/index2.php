<?php 

    $data_to_send = array(
        
        'product_id'=>321,
        'color'=>'blue',
        'size'=>'XL'
    );
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>

    <h1>Home</h1>

    <a href="product.php?product_id=<?php echo $data_to_send['product_id']; ?>&amp;color=<?php echo $data_to_send['color']; ?>&amp;size=<?php echo $data_to_send['size']; ?>">Blue t-shirt (XL)</a>

</body>
</html>