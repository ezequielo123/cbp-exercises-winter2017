<?php

function validating($string, $messages = array())
{ 
    if (!$string) 
    { 
        $messages[] = 'The value is invalid';
    } 

}    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

        <?php $messages = array(); ?>
        <?php validating(0, $messages); ?>

        <?php foreach($messages as $message); ?>

            <div class="message error"><?php echo $message; ?></div>

        <? endforeach ?>    

        

</body>
</html>