<?php
	class AuthentificationDirection extends CI_Controller{
		
	public	function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function AuthentificationDirection()
		{
			if(isset($_POST['mot_de_passe'])){
				$this->load->model('AuthentificationDirection_M');
				if($this->AuthentificationDirection_M->AuthentificationDirection($_POST['nom_utilisateur'],$_POST['mot_de_passe'])){
					redirect(base_url().'index.php/Direction/Direction');
				}else{
					redirect('AuthentificationDirection');
				}

			}
			$this->load->view('AuthentificationDirection');
		}
	}


?>