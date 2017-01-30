<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

        <ol>

          <?php for ($number = 1; $number < 6; $number++) : ?>
                
                <li><?php echo 'List item number ' . $number; ?></li>

          <?php endfor; ?> 

        </ol> 

        <br><br>
        

        <ol>

          <?php for ($newnumber = 10; $newnumber > 0; $newnumber--) : ?>
                
                
                <?php if($newnumber == 7) continue; ?>
                <?php if($newnumber < 3) break; ?>

                <li><?php echo 'List item number ' . $newnumber; ?></li>

          <?php endfor; ?> 

        </ol>


</body>
</html>