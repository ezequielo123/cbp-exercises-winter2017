<?php
	
    define("CURRENCY", "Pesos argentinos");
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
    print_price($price);
?>