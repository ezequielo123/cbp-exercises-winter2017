<?php 

class Games_Model extends model
{
   protected static $object_class = 'Game_Object';

   public static function getGames()
   {
        //write query
        $query = "
            SELECT `game`.*
            FROM `game`
            WHERE 1 
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }

}