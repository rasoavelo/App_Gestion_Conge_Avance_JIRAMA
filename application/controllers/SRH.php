<?php
	class SRH extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function SRH(){

			$this->load->view('SRH');
		}





	}



















?>