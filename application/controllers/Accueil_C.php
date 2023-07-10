<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_C extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Accueil_M');
	}
	public function index()
	{
		$data = array();
		// définition des données variables du template
		$data['title'] = 'Accueil';
		$data['description'] = 'Web Application pour controller son régime alimentaire';
		$data['keywords'] = 'regime, aliment, saine';
		$data['autor'] = 'Aina, Manasoa, Mpiahy';

		$this->load->view('accueil', $data);
	}
}