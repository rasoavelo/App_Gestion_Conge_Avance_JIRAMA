<?php
	class ChefService extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function ChefService(){

			$this->load->view('ChefService');
		}





	}



?>