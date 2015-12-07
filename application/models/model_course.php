<?php
class Model_course extends CI_Model {
    
    public function searchCourse($searchCourse){
        if(empty($searchCourse))
            return array();

        $result = $this->db->like('title', $searchCourse)
             ->or_like('university', $searchCourse)
             ->or_like('category', $searchCourse)
             ->get('course_data');

        return $result->result();
    }
}
