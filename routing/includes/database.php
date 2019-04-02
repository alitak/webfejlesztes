<?php

defined('BASE_PATH') OR die('no direct access');

/**
 * Description of database
 *
 * @author alitak
 */
class database
{

    protected static $sql_link = NULL;

    public function __construct($host, $username, $password, $database)
    {
        self::$sql_link = mysqli_connect($host, $username, $password, $database);
    }

    public function close()
    {
        mysqli_close(self::$sql_link);
    }

    public function getAll()
    {
        $sql = mysqli_query(self::$sql_link, 'SELECT * FROM ' . $this->table);
        return $sql->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id)
    {
        $sql = mysqli_query(self::$sql_link, 'SELECT * FROM ' . $this->table . ' WHERE id=' . $id . ' LIMIT 1');
        return $sql->fetch_assoc();
    }

}
