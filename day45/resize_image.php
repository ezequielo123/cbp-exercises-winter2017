<?php

header('Content-Type: image/png');
$size = getimagesize('image.png');
//echo $size[0] . ' x ' . $size[1];

$original = imagecreatefrompng('image.png');

//imagepng($original);
$ratio = $size[0] / $size[1];

$new = imagecreatetruecolor(200, 200 / $ratio);
imagecopyresampled($new, $original, 0, 0, 0, 0, 200, 200 / $ratio, $size[0], $size[1]);


$textcolor = imagecolorallocate($new, 14, 233, 91);
imagestring($new, 5, 5, 5, 'The beaaach!', $textcolor);

imagepng($new, 'image-small.png');
imagepng($new);
