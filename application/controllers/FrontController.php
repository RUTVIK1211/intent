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
}

/* End of file Controllername.php */
