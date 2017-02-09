<?php

function print_radio($input_name, $values, $selected_value)
{
    foreach ($values as $value) {

    ?>
        <input type="radio" name="<?php echo $input_name; ?>" value="<?php echo $value; ?>" <?php if($value == $selected_value) : ?> checked<?php endif; ?>>

    <?php } 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php print_radio('raddiobtn', array(1, 2), 1); ?>
</body>
</html>

