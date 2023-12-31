<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller {

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
		$this->load->model('Login_M');
		$this->load->library('form_validation');
		$this->load->library('session');
       
	}
	public function index()
	{

		$data = array();
		// définition des données variables du template
		$data['title'] = 'Sakafonao Connexion';
		$data['description'] = 'Web Application pour controller son régime alimentaire';
		$data['keywords'] = 'regime, aliment, saine';
		$data['autor'] = 'Aina, Manasoa, Mpiahy';

		$this->load->view('login', $data);
	}

	public function signup()
	{

		$data = array();
		// définition des données variables du template
		$data['title'] = 'Sakafonao Inscription';
		$data['description'] = 'Web Application pour controller son régime alimentaire';
		$data['keywords'] = 'regime, aliment, saine';
		$data['autor'] = 'Aina, Manasoa, Mpiahy';

		$this->load->view('signup', $data);
	}
	
    public function traiteLogin()
    {
		$user = $this->Login_M->check_user($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			redirect(base_url('index.php/Accueil_C'));
		} else {
			redirect(base_url('index.php/Login_C'));
		}
	}
	public function insertUsers()
    {
        $nom = $this->input->post('username');
        $email = $this->input->post('email');
		$genre = $this->input->post('gender');
		if($genre == '1')
		{
			$genre = 'homme';
		}else if($genre == '2'){
			$genre = 'femme'; 
		}

		$password = $this->input->post('password');
		$taille = $this->input->post('height');
		$poids = $this->input->post('weight');
        $this->Login_M->insert($email,$password,$nom,$genre,$taille,$poids);
        redirect('Login_C/index');

	}
	public function logOut()
    {
        $this->session->unset_userdata('user_id'); // Supprimer l'ID de l'utilisateur de la session
        $this->session->sess_destroy(); // Détruire la session
        redirect('Login_C/index');
    }
}
