<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/26 0026
 * Time: 上午 11:25
 */
class User_model extends CI_Model{
    public function checkUser($name, $pwd){
        return $this->db->get_where("t_user",array(
            'user_name'=> $name,
            'password' => $pwd
        ))->row();
    }
    public function getUser($userId) {
        return $this->db->get_where("t_user",array(
            'user_id'=>$userId
        ))->result();
    }
    public function register($name, $pwd) {
        $this->db->insert("t_user",array(
            'user_name'=> $name,
            'password' => $pwd
        ));
        return $this->db->affected_rows();
    }
    public function checkUserName($name){
        return $this->db->get_where("t_user",array(
            'user_name'=> $name
        ))->row();
    }
}
?>


