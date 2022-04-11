<?php
	class Direction extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function Direction(){

			$this->load->view('Direction');
		}





	}



















?>