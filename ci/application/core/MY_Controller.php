<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller
{

    public $smarty = NULL;
    protected $smarty_template_dir = ['application/views'];

    public function __construct()
    {
        parent::__construct();

        // smarty initialize && smarty-nak fontos adatok átadása
        if ($this->smarty === null) {
            $this->load->library('MY_Smarty');
            $this->smarty = new MY_Smarty();
            $this->smarty->loadSmarty();
        }
        $this->smarty->setTemplateDir($this->smarty_template_dir);
    }

}
