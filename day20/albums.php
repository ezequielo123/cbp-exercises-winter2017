<?php
require_once 'database.php';
    if ($_POST) {
        $stmt = $db->prepare('INSERT INTO albums (name, id_owner) VALUES (?, ?)');
        $stmt->execute([$_POST['name'], $_POST['owner']]);
        header('Location: albums.php?status=ok');
    } 

    if (isset($_GET['status']) && $_GET['status'] == 'ok') {
        echo 'OK';
    }

    $stmt = $db->prepare('SELECT id, firstname, lastname FROM users ORDER BY lastname, firstname');
    $stmt->execute();
    $owners = [];
    foreach ($stmt->fetchAll() as $value) {
        $owners[$value['id']] = $value['firstname'] . ' ' . $value['lastname'];
    }   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="name">
    Name: <input name="name" id="name" type="text"><br><br>
    <label for="owner">
    Owner: <select name="owner">
        <?php 
        foreach ($owners as $id => $name) {
            echo "<option value=$id>$name</option>";
        }
        ?>
        </select>    
    <input type="submit" value="Submit">
</form> 
</body>
</html>
   