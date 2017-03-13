<?php

function downloadNYtimesRSS()
{
    //descarga el rss desde la pagina de NYT
    $content = file_get_contents('https://remoteok.io/rss');

    // descarga el rss file a un arhivo local 
    //file_put_contents('nytimes-rss.xml', $content);
    file_put_contents('remoteok-rss.xml', $content);
}

// si no esta descargado el archivo, se descarga
if(!file_exists('remoteok-rss.xml'))
{
    downloadNYtimesRSS();
}

$content = file_get_contents('remoteok-rss.xml');

// read the string and form a simpleXMLelement object out of it
$simplexml_object = simplexml_load_string($content);



foreach($simplexml_object->channel->item as $one_item)
{
    //var_dump($one_item->title);

    $content = (string)$one_item->title;
    $content_description = (string)$one_item->pubDate;
    //echo $content.'<br>';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        body {
            font-family: Tahoma;
        }

        ol li {
            background-color: #e7e7e7;
            margin: 0.5em;
            padding: 0.5em;
        }
    </style>    
</head>
<body>
    <ol>
        <?php $numbers_displayed = 0; ?>
        <?php foreach($simplexml_object->channel->item as $one_item) : ?>

        <li>
            <a href="<?php echo $one_item->link; ?>" target="_blank"><h3><?php echo $one_item->title; ?></h3></a>
            <h5><?php echo $one_item->description; ?></h5>
            <h6>Published at <?php echo $one_item->pubDate; ?></h6>

            <?php 
            
                $children_of_element = $one_item->children('media', true);
                $image = $children_of_element->content;
                if($image)
                {
                    echo '<img src="' . $image->attributes()->url . '">';
                }
                
            ?>    
        </li>
        <?php $numbers_displayed++; ?>
        <?php if($numbers_displayed >= 15) break; ?>

        <?php endforeach; ?>
    </ol>    
</body>
</html>
