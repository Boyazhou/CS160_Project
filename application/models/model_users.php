<?php
class Model_users extends CI_Model {
    
    public function can_log_in(){
        $where = array('username' => $this->input->post('form_username'), 'password' => $this->input->post('form_password'));
        $this->db->where($where);
  
        $query = $this->db->get('users');
        echo($this->input->post('form-username').' test');
        echo $this->db->last_query();
        if($query->num_rows() == 1){
            return true;
        } else{
            return false;
        }
    }
}