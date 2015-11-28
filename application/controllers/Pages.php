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
        	$this->load->view("templates/footer");
        }

        public function course(){
            $this->load->view("templates/header");
            $this->load->view("course");
            $this->load->view("templates/footer");
        }

        public function job(){
            $this->load->view("templates/header");
            $this->load->view("job");
            $this->load->view("templates/footer");
        }

        public function login(){
            $this->load->view("templates/header");
            $this->load->view("login");
            $this->load->view("templates/footer");
        }
        
        public function login_validation(){
            $this->load->library('form_validation');
        
            $this->form_validation->set_rules('form-username', 'Username', 'required|trim|callback_validate_credentials');
            $this->form_validation->set_rules('form-password', 'Password', 'required|md5|trim');
            /*echo("<script>console.log('PHP: ".$this->input->post('form-password').";</script>");*/
          
          //  echo("Username: " + $this->input->post('username'));
            if($this->form_validation->run()){
                $this->home();
            }else{
                $this->login();
            }
           
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
}