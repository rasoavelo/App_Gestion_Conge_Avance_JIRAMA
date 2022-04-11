<?php
	class AuthentificationComptable_M extends CI_Model{

		public $variable;
		
		public function __construct()
		{
			parent::__construct();
		}

		public function AuthentificationComptable($nom_utilisateur,$mot_de_passe)
		{
			$this->db->where('nom_utilisateur',$nom_utilisateur);
			$this->db->where('mot_de_passe',$mot_de_passe);
			$q = $this->db->get('utilisateur_comptable');
			if($q->num_rows()>0)
			{
				return true;
			}else
			{
				return false;
			}
		}
	}
?>