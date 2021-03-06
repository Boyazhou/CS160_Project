<?php
class Pages extends CI_Controller {

       /* public function index($page = 'home')
        {
        	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
     		{
	            // Whoops, we don't have a page for that!
	            show_404();
     		}

       		$data['title'] = ucfirst($page); // Capitalize the first letter

	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);
        }*/
        public function index(){
        	$this->home();
        }

        public function home(){

        	$this->load->view("templates/header");
            $this->load->view("home");
            $this->load->view("categories");
            $this->load->model('model_course');
            $data['query'] = $this->model_course->searchCourse("Java");
            $this->load->view("popularCourses", $data);
            $data['query'] = $this->model_course->searchCourse("sport");
            $this->load->view("sportCourses", $data);
        	$this->load->view("templates/footer");
        }

        public function course(){
            $this->load->view("templates/header");
            $this->load->view("course");
            $this->load->view("templates/footer");
        }

        public function coursetrack(){
            $this->load->view("templates/header");
            $this->load->view("coursetrack");
            $this->load->view("templates/footer");
        }

		public function coursetrackresult(){
            $this->load->view("templates/header");
            $this->load->view("coursetrackresult");
            $this->load->view("templates/footer");		
		}
        public function login(){
            $this->load->view("templates/header");
            $this->load->view("login");
            $this->load->view("templates/footer");
        }
    
        public function signup(){
            $this->load->view("templates/header");
            $this->load->view("signup");
            $this->load->view("templates/footer");
        }
        
        public function login_validation(){
            $this->load->library('form_validation');
        
            $this->form_validation->set_rules('form-email', 'Email', 'required|trim|valid_email|callback_validate_credentials');
            $this->form_validation->set_rules('form-password', 'Password', 'required|md5|trim');
            if($this->form_validation->run()){
                $data = array(
                    'email' => $this->input->post('form-email'),
                    'is_loggin_in' => 1
                );
                $this->session->set_userdata($data);
                redirect('/Pages/home/', 'refresh');
            }else{
                $this->login();
            }
           
        }
    
        public function signup_validation(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('form-name', 'Name', 'required|trim');
            $this->form_validation->set_rules('form-email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('form-password', 'Password', 'required|trim');
            $this->form_validation->set_rules('form-cpassword', 'Confirm Password', 'required|trim|matches[form-password]|callback_valid_signup');
            
            $this->form_validation->set_message('is_unique', "That email address already exists.");
            if($this->form_validation->run()){
                $data = array(
                    'email' => $this->input->post('form-email'),
                    'is_loggin_in' => 1
                );
                $this->session->set_userdata($data);
                redirect('/Pages/home/', 'refresh');
            }else{
                $this->signup();
            }
            
        }
        
        public function valid_signup(){
            $this->load->model('model_users');
            
            if($this->model_users->add_user()) {
                return true;
            } else {
                $this->form_validation->set_message('valid_signup', 'Sign up failed');
                return false;
            }
        }
    
        public function logout() {
            $this->session->sess_destroy();
            redirect('/Pages/login/', 'refresh');
        }
        
        public function validate_credentials(){
            $this->load->model('model_users');
            
            if($this->model_users->can_log_in()) {
                return true;
            } else {
                $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
                return false;
            }
        }
    //search
        function search() {
            $this->load->model('model_course');
            $data['query'] = $this->model_course->searchCourse($this->input->post('search'));
            $this->load->view("templates/header");
            $this->load->view("course");
            $this->load->view("search_result", $data);
            $this->load->view("templates/footer");
        }

        function searchCategories($input) {
            $this->load->model('model_course');
            $data['query'] = $this->model_course->searchCourse($input);
            $this->load->view("templates/header");
            $this->load->view("home");
            $this->load->view("categories");
            $this->load->view("search_result", $data);
            $this->load->view("templates/footer");
        }

        function searchCategoriesBussness() {
            $this->searchCategories("business");
        }
        function searchCategoriesArts() {
            $this->searchCategories("art");
        }
        function searchCategoriesHealth() {
            $this->searchCategories("health");
        }
        function searchCategoriesHistory() {
            $this->searchCategories("History");
        }
        function searchCategoriesLanguages() {
            $this->searchCategories("Languages");
        }
        function searchCategoriesLaw() {
            $this->searchCategories("Law");
        }
        function searchCategoriesLiterature() {
            $this->searchCategories("Literature");
        }
        function searchCategoriesDigital() {
            $this->searchCategories("Digital");
        }
        function searchCategoriesPolitics() {
            $this->searchCategories("Politics");
        }
        function searchCategoriesScience() {
            $this->searchCategories("Science");
        }
        function searchCategoriesSport() {
            $this->searchCategories("Sport");
        }
        function searchCategoriesTeaching() {
            $this->searchCategories("Teaching");
        }

   


}

