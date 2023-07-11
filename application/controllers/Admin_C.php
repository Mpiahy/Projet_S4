<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {

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
		$this->load->model('Admin_M');
	}
	public function index()
	{
        
		$data = array();
		// définition des données variables du template
		$data['title'] = 'Admin';
		$data['description'] = 'Web Application pour controller son régime alimentaire';
		$data['keywords'] = 'regime, aliment, saine';
		$data['autor'] = 'Aina, Manasoa, Mpiahy';

		$data['liste_regime'] = $this->Admin_M->liste_regime();
		$data['liste_sport'] = $this->Admin_M->liste_sport();
		$data['liste_confirmation'] = $this->Admin_M->liste_confirmation();

		$this->load->view('admin', $data);
	}

	public function accepter_code()
	{
		$id = $this->input->post('id');
		$idUtilisateur = $this->input->post('idUtilisateur');
		$valeur = $this->input->post('valeur');

		// Appel au modèle pour supprimer l'entrée de confirmation
		$this->Admin_M->delete_confirmation($id);

		// Appel au modèle pour mettre à jour la table "code"
		$this->Admin_M->update_code($id);

		// Appel au modèle pour effectuer l'addition
		$this->Admin_M->addition_vola($idUtilisateur, $valeur);

		redirect('Admin_C/index');
	}

	public function refuser_code()
	{
		$id = $this->input->post('id');

		// Appel au modèle pour supprimer l'entrée de confirmation
		$this->Admin_M->delete_confirmation($id);

		redirect('Admin_C/index');
	}


}