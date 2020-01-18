<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class connexion extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('db_model');
    $this->load->helper('url_helper');
		$this->load->helper('html_helper');
    $this->load->library('session');
		$this->load->library('form_validation');
  }

	public function index() {

		$this->form_validation->set_rules('id', 'Identifiant', 'required');

		if ($this->form_validation->run() == TRUE) {

			$data['id'] = $this->input->post('id');
			$this->form_validation->set_rules('pwd', 'Mot de passe', 'required');
			if ($this->form_validation->run() == TRUE) {

				if($this->input->post('pwd')==$this->db_model->get_utilisateur($this->input->post('id'))[0]['PWD']){

						if($_SESSION){
							session_destroy();
						};
						session_start();
					  $_SESSION['id']= $this->input->post('id');
						print_r($_SESSION);
						$data['pwd'] = $this->input->post('pwd');
				    $this->load->view('templates\meta');
						$this->load->view('entree',$data);

				} else {

					$data['error'] = "Mot de passe invalide";
					$this->load->view('templates\meta');
					$this->load->view('form_connexion', $data);
					$this->load->library('form_validation');

				}

			}else{
				$data['error'] = "Vous n'avez pas saisi de mot de passe";
				$this->load->view('templates\meta');
				$this->load->view('form_connexion', $data);
				$this->load->library('form_validation');
			}

		} else {

			$this->load->view('templates\meta');
			$this->load->view('form_connexion');
			$this->load->library('form_validation');

		}

	}

}
