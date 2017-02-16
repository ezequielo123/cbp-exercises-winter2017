<?php
require_once './shared/user.php';
require_once './shared/database.php';

$db = new Database();
$user = new User($db);

$name = $user->getName();
if ($name) {
    echo '<a href="logout.php">Logout</a> / ';
    echo '<a href="summary.php">Summary</a>';
    echo '<h1 class="register2">Welcome ' . htmlspecialchars($user->getName()) . '!</h1>';
    echo '<h5 class="register2">Number of products in your cart: ' . count($_SESSION['products']) . '</h5>';
    
} else {
    echo '<a href="register.php">Register</a> / ';
    echo '<a href="login.php">Log in</a>';
}
