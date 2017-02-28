<?php

$game_list = new view('home/game_list');
$game_list->games = Games_Model::getGames();
$game_list->genre = Genre_Model::getGenre();


$page_layout = new view('home/page_layout');
$page_layout->game_list = $game_list;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);