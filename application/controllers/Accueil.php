<?php

	class Accueil extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function Accueil(){

			$this->load->view('Accueil');
		}

	}

?>