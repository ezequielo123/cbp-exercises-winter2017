<?php 
$a = array(
    'name' => 'Charles',
    'lastname' => 'Barkley',
    'city' => 'Brno',
    'country' => 'CZ',
);    
echo $a['country'];
$a['age'] = 123;
$a['name'] = 'John';
var_dump($a);
?>

<?php 
    $b = [1, 2, 3, 4];  
    var_dump($b);
?>