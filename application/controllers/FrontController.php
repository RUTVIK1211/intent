<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {

	public function index()
	{
		load_user_view('home','home');
	}


	public function aboutus_comapany_profile()
	{
		load_user_view('aboutus','companyprofile');
	}

	public function ourteam()
	{
		load_user_view('aboutus','ourteam');
	}

	public function ourclient()
	{
		load_user_view('aboutus','ourclient');
	}

	public function consultation_audit()
	{
		load_user_view('services','consultation_audit');
	}
		
	public function thefactoriesact1948()
	{
		load_user_view('services','thefactoriesact1948');
	}

	public function employees_provident()
	{
		load_user_view('services','employees_provident');
	}

	public function employeesstateInsuranceact()
	{
		load_user_view('services','employeesstateInsuranceact');
	}
	public function payrollservices()
	{
		load_user_view('services','payrollservices');
	}
	public function gujaratlabourwelfareactregulation()
	{
		load_user_view('services','gujaratlabourwelfareactregulation');
	}
	public function buildingandotherconstruction()
	{
		load_user_view('services','buildingandotherconstruction');
	}
	public function contractlabour()
	{
		load_user_view('services','contractlabour');
	}
	public function notificationupdates()
	{
		$data['documents'] = $this->Common_model->get_notification();
		// dd($data);
		load_user_view('services', 'notificationupdates', $data);
	}
	public function information()
	{
		load_user_view('information','information');
	}
	public function download()
	{
		$data['documents'] = $this->Common_model->get_downloads();
		load_user_view('download', 'download', $data);
	}
	public function inquiry()
	{
		load_user_view('inquiry','inquiry');
	}
	public function contectus()
	{
		load_user_view('contectus','contectus');
	}

	public function submit_inquiry()
	{


		$data = [
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone_no'),
			'companyname' => $this->input->post('company_name_'),
			'subject' => $this->input->post('subject'),
			'address_1' => $this->input->post('address_1'),
			'address_2' => $this->input->post('address_2'),
			'city' =>  $this->input->post('city'),
			'state'	=> $this->input->post('state'),
			'zipcode' => $this->input->post('zipcode'),
			'country' => $this->input->post('country'),
			'message' => $this->input->post('message'),
		];

		$status = $this->Common_model->insert($data, 'inquirymaster');
		if ($status) {
			$this->session->set_flashdata('message', 'Thanks you we will contact you soon');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
		}
		redirect('inquiry');
	}
	
}

/* End of file Controllername.php */
