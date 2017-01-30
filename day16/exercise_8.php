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

<?php

    function do_something_risky() {
    // do the risky stuff

    // return new messages
     return array(
        'error' => array(
            'I knew this would happen!',
            'This always happens.'
         ),
        'warning' => array(
            'You should fix this before proceeding'
         ),
        'success' => array()
     );
    }

?> 
<?php 
    $merged_messages = array();

    $new_messages = do_something_risky(); 
?> 
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../day7/css/style-scss.css">
</head>
<body>

    <?php
    
        // foreach($messages as $type => $message_of_type)  
         //{
            // foreach($message_of_type as $message) 
            // {
            //     $merged_messages[$type][] = $message;
          //  }

       // }    


     ?>  

     

    
      

</body>
</html>