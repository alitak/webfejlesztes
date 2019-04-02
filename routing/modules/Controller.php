<?php

defined('BASE_PATH') OR die('no direct access');

/**
 * Description of Controller
 *
 * @author alitak
 */
class Controller
{

    protected $db_obj = NULL;

    public function __construct()
    {
        
    }

    public function loadDB($model_name)
    {
        $model_name = 'database_' . lcfirst($model_name);
        $model_path = BASE_PATH . '/includes/' . $model_name . '.php';
        // load db
        if (is_file($model_path)) {
            include($model_path);
            $this->db_obj = new $model_name();
        }
    }

}
