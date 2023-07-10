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
          $id = array();
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $user= $this->connex->getUsers($email,$password);
            if($user != null){
                $this->session->set_userdata('user_id',$user['id']);
                $this->load->view('welcome_message');
                
            }else{
                $data['error'] = 'Invalid username or password';
                $this->load->view('Index');
			}
	}
	public function insertUsers()
    {
        $nom = $this->input->post('nom');
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $this->connex->insert($username,$password,$nom);
        redirect('Connexion/Index');

    }
}
