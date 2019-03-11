<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_category_model");
    }

    public function index()
    {
//        $this->load->model('blog_category_model');
        $categories = $this->blog_category_model->get_category();


        $cateId = $this->input->get('categoryId');
        if (!$cateId) {
            $blogs = $this->blog_category_model->get_blog(0);
        } else {
            $blogs = $this->blog_category_model->get_blog_by_category($cateId, 0);
//            var_dump($blogs);
        }
        $this->load->view('index', array(
            'categories' => $categories,
            'blogs' => $blogs
        ));
    }

    public function load_img()
    {
        $cate_id = $this->input->get('cateId');
        $page_index = $this->input->get('pageIndex');
        if (!$cate_id) {
            $blogs = $this->blog_category_model->get_blog($page_index);
        } else {
            $blogs = $this->blog_category_model->get_blog_by_category($cate_id, $page_index);
//            var_dump($blogs);
        }
       echo json_encode( $blogs);
//        var_dump($blogs);
    }
}
