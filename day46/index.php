<?php
$url = 'http://www.imdb.com/movies-in-theaters/';
//$url = 'https://nghttp2.org/httpbin/headers';

$opts = ['http' => [
    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
    'header' => [ 
        'Accept:*/*',
        'Accept-Language:es-419,es;q=0.8,en;q=0.6'
    ]    
]];
$context = stream_context_create($opts);
$page = file_get_contents($url, false, $context);

//echo $page;

try{
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($page);
    $xml = simplexml_import_dom($doc->getElementById('main'));
    $movie_title = $xml->div->div[1]->div;

    echo '<ul class="movies">';

    foreach($movie_title as $title) {
        if (strpos($title['class'], 'list_item') === false) {
            throw new Exception('DIV does not have list_item class');
        }
        if ((string)$title['itemprop'] === 'url') {
            throw new Exception('A element has unknown itemprop');
        }
        if ($title->table->tbody->tr->td[1]->h4['itemprop'] === 'name') {
            throw new Exception('That is not a movie item');
        }
        if (!preg_match('#(.+) \(([0-9]{4})\)$#', trim($title->table->tbody->tr->td[1]->h4->a), $matches)) {
            throw new Exception('Movie name does not match');
        }
        echo '<li class="child"><h2>' 
        . '<a href="http://imdb.com' . $title->table->tbody->tr->td[1]->h4->a['href'] . '">' 
        . $matches[1] . '</h2></a><p>Year: ' . $matches[2] . '</p>'
        . '<img src="' . $title->table->tbody->tr->td[0]->div->a->div->img['src'] . '"><p>' 
        . $title->table->tbody->tr->td[1]->div[1] .  '</p>' . '<strong>' . $title->table->tbody->tr->td[1]->div[2]->h5 . ' </strong>' 
        . $title->table->tbody->tr->td[1]->div[2]->span->span->a
        . '</li>';
    }
    echo '</ul>';
} catch (Exception $e) {
    echo $e->getMessage();
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

        .movies {
            display: flex;
            flex-wrap: wrap;
        }
        .child {
            flex-grow: 1;
            width: 33%;
            height: 420px;
        }
        .child {
            list-style: none;
        }
        .movies a {
            text-decoration: none;
            color: darkgreen;
        }
    </style>
</head>
<body>
     
</body>
</html>
