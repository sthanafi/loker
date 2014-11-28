<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() 
	{

		if ($this->session->userdata('logged_in'))
		{
			redirect('barang');
		}
		else
		{

			$this->load->view('header');
			$this->load->view('form_login');
			$this->load->view('footer');
		}
	}

public function authenticate(){
	
		$this->load->helper(array('form','url'));
		//$this->load->library('form_validation');
		//echo validation_errors();

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

	
		
		//
		//print_r(validation_errors());
		
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('auth');

			if ($this->auth->check($username, $password)) 
			{
				
				$data = array(
						'username' => $username,
						'logged_in' => TRUE);
				$this->session->set_userdata($data);
				redirect('barang');
			}
			else
			{
				
				echo "<center>"."Anda memasukkan username atau password yang salah"."</center>";
				$this->index();
			}
		}
		else
		{
			$this->index();
			//redirect('login');
		}
	
}
}
