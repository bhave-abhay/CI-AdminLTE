<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	public function BuildPage(
		$main_view_name,
		&$main_view_data = [],
		&$meta_header_data = [],
		&$navbar_data = [],
		&$sidebar_data = [],
		&$footer_view_data = [],
		&$meta_footer_data = []
	) {
		echo view('meta_header', $meta_header_data);
		echo view('navbar_view', $navbar_data);
		echo view('sidebar_view', $sidebar_data);
		echo view($main_view_name, $main_view_data);
		echo view('footer_view', $footer_view_data);
		echo view('meta_footer', $meta_footer_data);
	}

}
