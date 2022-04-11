<?php
	class AuthentificationComptable extends CI_Controller{
		
	public	function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function AuthentificationComptable()
		{
			if(isset($_POST['mot_de_passe'])){
				$this->load->model('AuthentificationComptable_M');
				if($this->AuthentificationComptable_M->AuthentificationComptable($_POST['nom_utilisateur'],$_POST['mot_de_passe'])){
					redirect(base_url().'index.php/Comptable/Comptable');
				}else{
					redirect('AuthentificationComptable');
				}

			}
			$this->load->view('AuthentificationComptable');
		}
	}


?>