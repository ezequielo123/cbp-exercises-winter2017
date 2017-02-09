<?php

    require_once('lib/data-functions.php');


    if (!empty($_POST)) {

        $list_of_students = array(
            'name' => isset($_POST['name']) ? $_POST['name'] : null,
            'surname' => isset($_POST['surname']) ? $_POST['surname'] : null,
            'gender' => isset($_POST['gender']) ? $_POST['gender'] : null,
            'age' => isset($_POST['age']) ? $_POST['age'] : null,
        );
    }

    function field_values($post_name, $default_value = null) {

        $value = isset($_POST[$post_name]) ? $_POST[$post_name] : $default_value;
        return htmlspecialchars($value);

    }   

    insert_data($list_of_students);


?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>

</head>
<body>

    <div class="hola">
        <form name="form" action="" method="post">
            <p>Name: <input type="text" name="name" value="<?php echo field_values('name', ''); ?>" /></p>
            <p>Surmane: <input type="text" name="surname" value="<?php echo field_values('surname', ''); ?>"></p>
            <p><input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female</p>
            <input type="hidden" name="age" value="0">
            <p><input type="checkbox" name="age" value="1">More than 18</p>
            <input type="submit" value="Save data">
        </form>
    </div>
    
</body>
</html>

