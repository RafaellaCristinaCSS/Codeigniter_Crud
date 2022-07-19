<?php
class User_model extends CI_Model{
    function create($formArray){
        $this->db->insert('tb_user', $formArray); /* INSERT INTO users (name, email) values (?,?) */
    }

    function all(){
       return $users = $this->db->get('tb_user')->result_array(); /* Select * From tb_user */
    }
}
?>