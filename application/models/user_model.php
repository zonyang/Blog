<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/26 0026
 * Time: 上午 11:25
 */
class User_model extends CI_Model{
    public function checkUser($name, $pwd){
        return $this->db->get_where("t_diseaseprediction",array(
            'user_name'=> $name,
            'password' => $pwd
        ))->row();
    }
}
?>


