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
		load_user_view('services','notificationupdates');
	}
	public function information()
	{
		load_user_view('information','information');
	}
	public function download()
	{
		load_user_view('download','download');
	}
	public function inquiry()
	{
		load_user_view('inquiry','inquiry');
	}
	public function contectus()
	{
		load_user_view('contectus','contectus');
	}
	
}

/* End of file Controllername.php */
