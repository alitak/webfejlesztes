<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_model
{

    public function getAll()
    {

        return $this->db->get('posts')->result();
    }

}
