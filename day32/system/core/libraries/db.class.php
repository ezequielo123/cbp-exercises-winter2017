<?php

/**
*allows to run SQL queries 
*
*provides functionality to connect to database
*it will use information from config
*/
class db
{
    //connection to the database (object class PDO)
    protected static $pdo = null;

    public static function pdo()
    {
        // if static::$pdo was not yet created (ie. connected to the db)
        if(static::$pdo===null) {

            // connect to the database
            // store the connection (PDO) into static::$pdo
            try {
                // connect to the database and store the connection in the static property
                static::$pdo = new PDO(
                'mysql:dbname='.config::get('db_name').';host='.config::get('db_host').';charset='.config::get('db_charset', 'utf8'), //'mysql:dbname=database_name;host=locahost;charset=utf8',
                config::get('db_user'),
                config::get('db_pass')
                );
                // set the level of error reporting
                static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {

                //prints error if connection fails
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return static::$pdo;
    }

    /**
    *runs an SQL query and return the result
    */
    public static function query($sql, $substitution = array())
    {
        //get the PDO object
        $pdo = static::pdo();

        //prepare the statement
        $stmt = $pdo->prepare($sql);

        //execute the statement
        $stmt->execute($substitution);

        return $stmt;
    }

}