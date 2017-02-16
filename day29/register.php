<?php
require './shared/database.php';
$db = new Database();
if ($_POST) {
    $userid = $db->insertuser($_POST['name'], $_POST['email'], $_POST['pass']);
    session_start();
    
    $_SESSION['userid'] = $userid;
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Register as a new user</h2>
    <form action="register.php" method="post">
        <div class="container text-center">
            <label><b>Username</b></label>
            <input type="text" name="name" required><br />

            <label><b>Email</b></label>
            <input type="email" name="email" required><br />

            <label><b>Password</b></label>
            <input type="password" name="pass" required><br />
            <div class="space">
                <button type="submit" class="btn btn-success">Register</button>
                <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>    
                <a href="login.php">Already registered? Log in</a>
        </div>
    </form>
</body>
</html>