<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller
{

    public function index()
    {
        $this->load->model('Post_model', 'post');
        $this->smarty->assign(['data' => $this->post->getAll()]);
        $this->smarty->assign('content', $this->smarty->fetch('posts/index.tpl'));
        $this->smarty->display('index.tpl');
    }

    public function new()
    {
    $this->load->model('Category_model', 'category');
    $this->smarty->assign(['categories' => $this->category->getAll()]);
    $this->smarty->assign('content', $this->smarty->fetch('posts/new.tpl'));
    $this->smarty->display('index.tpl');
}

public function store()
{
    var_dump($this->input->post());
}

}
