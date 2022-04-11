<?php
	class AuthentificationCs extends CI_Controller{
		
	public	function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function AuthentificationCs()
		{
			if(isset($_POST['mot_de_passe'])){
				$this->load->model('AuthentificationCs_M');
				if($this->AuthentificationCs_M->AuthentificationCs($_POST['nom_utilisateur'],$_POST['mot_de_passe'])){
					redirect(base_url().'index.php/ChefService/ChefService');
				}else{
					redirect('AuthentificationCS');
				}

			}
			$this->load->view('AuthentificationCs');
		}
	}


?>