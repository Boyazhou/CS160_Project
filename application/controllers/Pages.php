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
}