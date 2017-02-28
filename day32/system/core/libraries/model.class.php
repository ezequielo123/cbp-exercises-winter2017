<?php

class model
{
    protected static $object_class = 'stdClass';

    public static function fetchObjects($stmt)
    {    
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::$object_class);
        return $stmt->fetchAll();
    }
    public static function fetchObject($stmt)
    {    
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::$object_class);
        return $stmt->fetch();
    }
}