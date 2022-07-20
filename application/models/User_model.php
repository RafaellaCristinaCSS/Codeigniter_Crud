<?php
class User_model extends CI_Model{
    function create($formArray){
        $this->db->insert('tb_user', $formArray); /* INSERT INTO users (name, email) values (?,?) */
    }

    function all(){
       return $users = $this->db->get('tb_user')->result_array(); /* Select * From tb_user */
    }
    function getUser($user_id){
        $this->db->where('use_id', $user_id);
        return $user = $this->db->get('tb_user')->row_array(); /* Select * From users Where user_id = ? */
    }
    function updateUser($user_id, $formArray){
        $this->db->where('use_id',$user_id);
        $this->db->update('tb_user',$formArray); /* Update users SET name = ? , email = ? Where user_id = ?  */
    }
    function deleteUser($user_id){
        $this->db->where('use_id',$user_id);
        $this->db->delete('tb_user'); /* Delete From users Where use_id = ? */
    }
}
?>
