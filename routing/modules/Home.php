<?php

defined('BASE_PATH') OR die('no direct access');
include 'Controller.php';

/**
 * Description of Home
 *
 * @author alitak
 */
class Home extends Controller
{

    public function index()
    {
        return 'home/index';
    }

    public function show()
    {
        return 'home/show';
    }

}
