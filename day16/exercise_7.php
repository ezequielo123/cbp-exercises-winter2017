<?php

    $messages = array(
        'error' => array(
            'Something went wrong',
            'Something went REALLY wrong',
            'There is no end to this!'
         ),
        'warning' => array(
            'This is your first warning',
            'This is your final warning'
        ),
        'success' => array(
            'Finally, something was successful.'
         )
    );
?> 

   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../day7/css/style-scss.css">
</head>
<body>
 

    <?php foreach($messages as $message_type => $message_of_type) : ?>

         <?php foreach($message_of_type as $message_text) : ?>

            <div class="message <?php echo $message_type; ?>"><?php echo $message_text; ?></div>

         <?php endforeach; ?>

     <?php endforeach; ?>       

     

    
      

</body>
</html>