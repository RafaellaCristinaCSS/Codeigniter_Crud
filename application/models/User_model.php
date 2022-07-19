<?php
class User_model extends CI_Model{
    function create($formArray){
        $this->db->insert('tb_user', $formArray); /* INSERT INTO users (name, email) values (?,?) */
    }
}
?>