<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

include('vendor/smarty/smarty/libs/Smarty.class.php');

class MY_Smarty extends Smarty
{

    function loadSmarty()
    {
        $this->compile_dir = APPPATH . 'cache/templates_c';
        $this->template_dir = APPPATH . "views";
        $this->setCacheDir(APPPATH . 'cache');
        $this->addPluginsDir(APPPATH . 'third_party/smarty_extensions');
        $this->debugging = false;
        $this->compile_check = true;
        $this->caching = false;
        $this->cache_lifetime = 86400;

        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);

        // Assign CodeIgniter object by reference to CI
        if (method_exists($this, 'assignByRef')) {
            $ci = & get_instance();
            $this->assignByRef("ci", $ci);
        }

        log_message('debug', "Smarty Class Initialized");
    }

}
