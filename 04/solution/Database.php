<?php

/**
 * Description of database
 *
 * @author alitak
 */
class Database
{

    protected static $sql_link = NULL;

//    private static $i = 0;

    public function __construct($host, $user, $password, $database)
    {
        self::$sql_link = mysqli_connect($host, $user, $password, $database);
//		self::$i++;
    }

    public function close()
    {
        mysqli_close(self::$sql_link);
    }

    public function all()
    {
        $db_resource = mysqli_query(self::$sql_link, 'SELECT * FROM ' . $this->table_name);
        return $db_resource->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id)
    {
        $db_resource = mysqli_query(self::$sql_link, 'SELECT * FROM ' . $this->table_name . ' WHERE id=' . $id . ' LIMIT 1');
        return $db_resource->fetch_assoc();
    }

//	public static function getI()
//	{
// 		return self::$i;
//	}
}
