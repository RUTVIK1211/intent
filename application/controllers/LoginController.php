<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function index()
	{

		if (!$this->session->userdata('userId')) {
			if ($this->input->post()) {
				$validation = [
					['field' => 'user_email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
					['field' => 'user_password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]|max_length[16]'],
				];
				$this->form_validation->set_rules($validation);
				if ($this->form_validation->run() == false) {
					load_login_view('login', 'login');
				} else {
					$email = @$this->input->post('user_email');
					$password = trim(@$this->input->post('user_password'));
					$customerDetail = $this->Common_model->getSingle_data('id, email, name', 'usermaster', array('email' => $email, 'password' => $password));

					if (!empty($customerDetail)) {
						$this->session->set_flashdata('message', 'Login success !!');
						$this->session->set_userdata('userId', '1');
						redirect('dashboard');
					} else {

						$this->session->set_flashdata('error', 'Invalid Email or Password');
						load_login_view('login', 'login');
					}
				}
			} else {
				load_login_view('login', 'login');
			}
		} else {
			redirect('dashboard-new');
		}
	}

	public function dashboard()
	{
		load_admin_view('dashboard', 'dashboard');
	}
}

/* End of file Controllername.php */
