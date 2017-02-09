<?php

    require_once('lib/data-functions.php');


    $list_of_students = get_index();

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <ul>
        <?php foreach($list_of_students as $student_id => $student_name) : ?>

            <li>
                <a href="details.php?<?php echo $student_id; ?>">More details...</a></p><?php echo '<li>' . $student_name . '</li>'; ?>
            </li>

        <p>

        <?php endforeach; ?> 
    </ul>               
    
</body>
</html>

