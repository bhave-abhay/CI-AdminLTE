<?php namespace App\Controllers;

class Auth extends BaseController
{

	public function index()
	{
		echo view('meta_header');
		echo view('auth/login_view');
		echo view('meta_footer');
	}
	public function RegisterView()
	{
		echo view('meta_header');
		echo view('auth/register_view');
		echo view('meta_footer');
	}
	public function ForgotPasswordView()
	{
		echo view('meta_header');
		echo view('auth/forgot_password_view');
		echo view('meta_footer');
	}

}
