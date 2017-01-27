<?php 
    $a = array(
        'name' => 'jack',
        'lastname' => 'daniels',
        'age' => '8',
        'color' => 'blue',
);   

foreach ($a as $key => $value) {
    //echo $key;
    //echo ': ';
    //echo $value;
    //echo '<br>';
    //echo '<hr>';

    echo "<p><em><strong>This is my $key: <p style='color:blue'>$value</p></em></strong></p><br><hr>"; //another way to print and concatenate everything

    //echo $key . '; ' . $value . '<br><hr>'; //another way to print and concatenate everything
}   

foreach ($a as $value) {
    
    echo "<p><em><strong><p style='color:blue'>$value</p></em></strong></p><br><hr>"; //another way to print and concatenate everything

}  
?>
