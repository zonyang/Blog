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

    public function get_blog_and_category($blog_id)
    {
        $this->db->select('t_blog.*,t_category.cate_name');
        $this->db->from('t_blog');
        $this->db->join('t_category', 't_blog.category_id=t_category.category_id');
        $this->db->where('t_blog.blog_id', $blog_id);
        return $this->db->get()->row();
    }

    public function get_blogs($num)
    {
        return $this->db->limit(6, $num * 6)->order_by('create_time desc')->get("t_blog")->result();
    }

    public function get_blog_by_category($id, $num)
    {
        return $this->db->limit(6, $num * 6)->order_by('create_time desc')->get_where("t_blog", array(
            "category_id" => $id
        ))->result();
    }

    public function get_comments($blog_id)
    {
        $this->db->order_by('create_time desc')->select('t_comment.*,t_user.user_name');
        $this->db->from('t_comment');
        $this->db->join('t_user', 't_comment.user_id=t_user.user_id');
        $this->db->where('t_comment.blog_id', $blog_id);
        return $this->db->get()->result();
    }

    public function commit_comment($blog_id, $time, $user_id, $content)
    {
        $this->db->insert("t_comment", array(
            "content" => $content,
            "create_time" => $time,
            "blog_id" => $blog_id,
            "user_id" => $user_id
        ));
        return $this->db->affected_rows();
    }
}


?>