<?php

if(!empty($_POST))
{
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A form</title>
</head>
<body>
    
    <form action="" method="post">

        <input type="text" name="text" value="<?php echo htmlspecialchars('Coding'); ?>" placeholder="Write something here" />
<br />
        <textarea name="textarea" ><?php echo htmlspecialchars('Bootcamp'); ?></textarea>
<br />
        <input type="checkbox" name="checkbox" <?php if(true) echo 'checked'; ?> />
        <input type="checkbox" name="checkbox" <?php echo true ? ' checked' : ''; ?> />
<br />
        <?php $radio_value = 2; ?>
        <input type="radio" name="radiobtn" value="1" <?php echo $radio_value == 1 ? ' checked' : ''; ?> />
        <input type="radio" name="radiobtn" value="2" <?php echo $radio_value == 2 ? ' checked' : ''; ?> />
        <br />
        <select name="select" >
            <option value="1">One</option>
            <option value="2">Two</option>
        </select>
<br />
        <input type="password" name="password"  />
<br />
        <input type="hidden" name="hidden"  />
<br />
        <input type="file" name="file"  />
<br />
        <input type="datetime-local" name="datetime-local"  />
<br />
        <input type="date" name="date" />
<br />
        <input type="month" name="month">
<br />
        <input type="color" name="color">
<br />

        <input type="submit" value="submit form" />

    </form>


</body>
</html>