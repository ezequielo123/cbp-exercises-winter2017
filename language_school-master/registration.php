<?php 
require_once "classes/courses.class.php";
require_once "database_courses.php";

//get all the files within classes as array
$files = scandir("classes");

foreach($files as $file){
    // if the file is the reference to this folder
    //or the one above, continue
    if($file == "." || $file == "..")
    continue;
    
    //if the file is a php file 
    if(pathinfo($file, PATHINFO_EXTENSION) == "php"){
        //require the file
        require_once ("classes/" . $file);
    }
}

// select language and level from database so that students can only register for existing courses
$stmt = $db -> prepare("SELECT language, level FROM courses");
$stmt -> execute();
$languages = [];
$level = [];
foreach ($stmt -> fetchAll() as $value){
   $languages[] = $value["language"];
   $level[] = $value["level"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
    <h1>My Language School</h1>
</header>
<?php
if($_POST){
    echo "Thank you for registering, you will be contacted soon.";
}
?>
    <h2>I want to register for a course</h2>
    <form action="" method="post">
        Name:<br>
        <input type="text" name="name"><br> 
        <br> 
        Email:<br> 
        <input type="text" name="email"><br> 
        <br> 
        Language:<br>
        <select name="language">
            <option value="">---</option>
            <?php foreach ($languages as $value) :?>
                <?php echo "<option value=$value>$value</option>"; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <br> 
        Level:<br>
        <select name="level">
            <option value="">---</option>
            <?php foreach ($level as $value) :?>
                <?php echo "<option value=$value>$value</option>"; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit" class="button">
    </form>
    <a href="index.php">Back to main page</a>
</body>

</html>