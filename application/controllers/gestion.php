<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gestion extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('db_model');
    $this->load->helper('url_helper');
		$this->load->helper('html_helper');
    $this->load->library('session');
  }

	public function index() {



		if ($_SESSION) {
      $data["depenses"]=$this->db_model->get_listedepenses($_SESSION["id"]);
			$data["balances"]=$this->db_model->get_listedepenses($_SESSION["id"]);
      $this->load->view('templates\meta');
      $this->load->view('tableau_bord', $data);





		} else {

      redirect(connexion);

		}

	}

}
