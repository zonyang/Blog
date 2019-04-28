<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/26 0026
 * Time: 下午 2:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('session');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function checkLogin()
    {
        $name = $this->input->post('name');
        $pwd = $this->input->post('pwd');
        $ret = $this->user_model->checkUser($name, $pwd);
        if ($ret) {
            $this->session->user=$ret;
            redirect('/welcome');
        } else {
            $this->load->view('login');
        }
    }

    public function reg()
    {
        $this->load->view('reg');
    }
}

?>