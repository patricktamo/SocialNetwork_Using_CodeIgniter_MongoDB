<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->accueil();
	}


	public function accueil()
	{
		//Chargement du helper assets
		$this->load->helper('assets');
		//Chargement du generateur de template
		$this->load->library('layout');
		//Chargement des fichiers  css
		$this->layout->ajouter_css('bootstrap');
		//$this->layout->ajouter_css('bootstrap-responsive');
		//Chargement des fichiers  js
		$this->layout->ajouter_js('bootstrap.min');
		# Mise en place du formulaire de connection et d'inscription
		$this->layout->view('vue1');
	}
}
