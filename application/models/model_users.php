<?php
class Model_users extends CI_Model {
    
    public function can_log_in(){
        $where = array('email' => $this->input->post('form-email'), 'password' => $this->input->post('form-password'));
        $this->db->where($where);
  
        $query = $this->db->get('users');
        if($query->num_rows() == 1){
            return true;
        } else{
            return false;
        }
    }
}