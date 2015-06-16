<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $collection='users';
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->output->enable_profiler(true);
		$this->load->view('welcome_message');
	}


	public function accueil()
	{
		//test
			$this->load->model('test_model');
		# code...

		$data = array();


		$data['valeur'] = $this->test_model->essai_bd($this->collection);
		$this->load->library('layout');

		$this->layout->views('vue1')->views('vue2')->view('vue3',$data);
	}
}
