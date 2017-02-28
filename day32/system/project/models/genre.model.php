<?php 

class Genre_Model extends model
{
   protected static $object_class = 'Genre_Object';

   public static function getGenre()
   {
        //write query
        $query = "
            SELECT * FROM game_has_genre
            INNER JOIN genre
            ON game_has_genre.genre_id = genre.id
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);

        $genres_by_game = array();
        foreach ($objects as $object)
        {
            $genres_by_game[$object->game_id][] = $object;
        }
        
        return $genres_by_game;
   }

}