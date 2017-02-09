<?php
	
    define("CURRENCY", "CZK");
    $price = CURRENCY;

	function print_price($price) {
      
      switch ($price) {
        case 'EUR':
          echo $price . ' €';
          break;
        case 'CZK':
          echo $price . ' Kč';
          break;
        case 'USD':
          echo $price . ' $';
          break;
       }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Hola <?php echo print_price($price); ?></p>
</body>
</html>