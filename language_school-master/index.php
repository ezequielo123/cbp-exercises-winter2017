<?php
session_start();
require_once "database_courses.php";
require_once "database_teachers.php";
require_once "classes/courses.class.php";

//MySQL request to see all the courses
$statement = $db -> prepare("SELECT id, language, no_hours, teacher, level, status, concat(id_course, id) AS 'unique_id' FROM courses ORDER BY language, level, id ASC");
$statement -> execute();

// Putting courses in an array on the basis of the MySQL request
// then turning the course array into an object
$new_course_as_array = [];
foreach ($statement -> fetchAll() as $value){
    $new_course_as_array["unique_id"] = $value["unique_id"];  
    $new_course_as_array["language"] = $value["language"]; 
    $new_course_as_array["no_hours"] = $value["no_hours"]; 
    $new_course_as_array["teacher"] = $value["teacher"]; 
    $new_course_as_array["level"] = $value["level"]; 
    $new_course_as_array["status"] = $value["status"]; 
    
    $new_course = new course($new_course_as_array["unique_id"], $new_course_as_array["language"], $new_course_as_array["no_hours"],$new_course_as_array["teacher"],$new_course_as_array["level"],$new_course_as_array["status"]);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My language school</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet"> 
</head>
<body>
    <header>
        <h1>My Language School</h1>
    </header>
    <div class="buttons">
        <button class="button" onclick='window.location.href="admin/signin_admin.php"'>Administrator login</button>
        <button class="button" onclick='window.location.href="admin/signup_admin.php"'>Register new administrator</button>
    </div>
    <p>We are a fantastic language school, come study with us!</p>
    <p>Number of courses currently offered: <?php echo course::getNumberOfCourses(); ?></p>

    <table>
        <thead>
            <tr><th>Language</th><th>Level</th><th>Number of hours</th><th>Teacher</th><th>Course ID</th><th>Status</th></tr>
        </thead>
        <tbody>
        <!--listing the courses on the basis of the database-->          
        <?php foreach(course::$list_courses as $course) :?>
            <tr>
                <td>
                    <?php echo $course -> language; ?>
                </td>
                <td>
                    <?php echo $course -> level; ?>
                </td>
                <td>
                    <?php echo $course -> no_hours; ?>
                </td>
                <td>
                    <!--adding links to the personal profiles of the teachers-->
                    <a href="profiles.php?teacher=<?php echo $course -> teacher; ?>" title="profile of <?php echo $course -> teacher; ?>"><?php echo $course -> teacher; ?></a>
                </td>
                <td>
                    <?php echo $course -> id; ?>
                </td>
                <td>
                    <!--adding links for future students to register-->
                    <?php if ($course -> status == "Open for registration"){?><a href="registration.php"><?php echo $course -> status; ?></a>
                    <?php } else { echo $course -> status; } ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody> 
    </table>
<br>

</body>
</html>