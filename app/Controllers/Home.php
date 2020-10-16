<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{

	}
	public function Login()
	{
		echo view('meta_header');
		echo view('login_view');
		echo view('meta_footer');
	}

	public function AdminPanel()
	{
		$dummyData = [];
		$viewData = [
			'user'=> [
				'name'=>'Abhay Anand Bhave',
				'profile_image'=>'vendor/AdminLTE/img/user2-160x160.jpg'
			]
		];
		$metaFooterData = [
			'arrPageScript' => [
				'vendor/AdminLTE/js/pages/dashboard2.js'
			]
		];
		$this->BuildPage(
			'blank_page_view',		//main view name
			$viewData,			//main view data
			$dummyData,			//meta header data
			$dummyData,			//navbar data
			$viewData,			//sidebar data
			$dummyData,			//footer view data
			$metaFooterData		//meta footer data
		);
	}

	//--------------------------------------------------------------------

}
