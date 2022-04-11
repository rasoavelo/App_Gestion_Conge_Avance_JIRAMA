<?php
	class AuthentificationSrh extends CI_Controller{
		
	public	function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function AuthentificationSrh()
		{
			if(isset($_POST['mot_de_passe'])){
				$this->load->model('AuthentificationSrh_M');
				if($this->AuthentificationSrh_M->AuthentificationSrh($_POST['nom_utilisateur'],$_POST['mot_de_passe'])){
					redirect(base_url().'index.php/SRH/SRH');
				}else{
					redirect('AuthentificationSrh');
				}

			}
			$this->load->view('AuthentificationSrh');
		}
	}


?>