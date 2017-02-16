<?php
require './shared/database.php';
$db = new Database();
if ($_POST) {
    $user = $db->getuserbyemail($_POST['email']);
    if (empty($user)) {
        echo 'User required';
    }elseif (password_verify($_POST['pass'], $user['password']))
    {
        session_start();
        $_SESSION['userid'] = $user['id'];
        header('Location: index.php');
    }
    
        echo 'Wrong Password';
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Log in</h2>
    <form action="login.php" method="post">
        <div class="container text-center">

            <label><b>Email</b></label>
            <input type="email" name="email" required><br />

            <label><b>Password</b></label>
            <input type="password" name="pass" required><br />
            <div class="space">
                <button type="submit" class="btn btn-success">Log in</button>
                <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>    
        </div>
    </form>
</body>
</html>