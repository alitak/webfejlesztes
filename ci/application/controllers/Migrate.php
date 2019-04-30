<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{

    public function index($target_version = NULL)
    {

        $this->load->library('migration');
        if ($target_version !== NULL && is_numeric($target_version)) {
            if ($this->migration->version($target_version)) {
                echo 'Migration OK\n';
            } else {
                show_error($this->migration->error_string());
            }
        } else {
            if ($this->migration->latest() === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo 'Migration OK\n';
            }
        }
    }

}
