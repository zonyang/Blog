<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/26 0026
 * Time: 下午 7:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_category_model");
        $this->load->library('session');
    }

    public function commit()
    {
        $user_id = $this->input->post('userId');
        $content = $this->input->post('content');
        $blog_id = $this->input->post('blogId');
        $time = $this->input->post('time');
        echo $user_id;
        $col = $this->blog_category_model->commit_comment($blog_id,
            $time, $user_id, $content);
        if($col) {
            echo "success";
        }else {
            echo "fail";
        }
    }
}