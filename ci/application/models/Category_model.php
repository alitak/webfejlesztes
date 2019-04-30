<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_model
{

    public function getAll()
    {

        return $this->db->get('categories')->result();
    }

}
