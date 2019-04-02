<?php

defined('BASE_PATH') OR die('no direct access');
include 'Controller.php';

/**
 * Description of Users
 *
 * @author alitak
 */
class Users extends Controller
{

    public function get($id)
    {
        $user = $this->db_obj->find($id);
        return print_r($user, true);
    }

}
