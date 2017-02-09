<?php

function print_radio2($input_name, $values, $selected_value)
{
    $html = '';

    // for each $values
    foreach($values as $value => $label)
    {
        $one_radio_html = 
            '<input type="radio" value="' 
            . htmlspecialchars($value) 
            . '" name="' 
            . $input_name
            . '"'
            . ($value == $selected_value ? ' checked' : '') 
            . '>'; 
        $html .= $one_radio_html;
    }

    echo $html;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radio buttons</title>
</head>
<body>
    
    <?php print_radio2('radiobtn', array(
        1, 
        2
    ), 1); ?>

</body>
</html>