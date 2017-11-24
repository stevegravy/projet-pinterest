<?php

class DB
{
    static $db;

    public static function connect($config)
    {
        try {
            self::$db = new PDO($config->connection . ';dbname=' . $config->name, $config->username, $config->password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception) {
            die($exception);
        }
    }

    public static function getPDO()
    {
        return self::$db;
    }
}

?>