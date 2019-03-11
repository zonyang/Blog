<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/10 0010
 * Time: 下午 1:40
 */
class Blog_category_model extends CI_Model
{
    public function get_category()
    {

        return $this->db->get("t_category")->result();
    }

    public function get_blog($num)
    {
        return $this->db->limit(6, $num * 6)->order_by('create_time desc')->get("t_blog")->result();
    }

    public function get_blog_by_category($id, $num)
    {
        return $this->db->limit(6, $num * 6)->order_by('create_time desc')->get_where("t_blog", array(
            "category_id" => $id
        ))->result();
    }
//    public function get
}


?>