<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Test_model extends CI_Model
	{
	public function get_info()
	{
	// On simule l'envoi d'une requête
		return array('auteur' => 'Chuck Norris','date' => '24/07/05','email' => 'email@ndd.fr');
	}

	public function essai_bd($collection)
	{
		# code...
		return $this->mongo_db->count($collection);
	}
}