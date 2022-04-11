<?php 
class DemandeConge_M extends CI_model {

	function DemandeConge($formArray)
	{
		$this->db->insert('demande_conge',$formArray); // INSERT INTO demande_conge (nom,prenom,matricule,service,dateDebut,dateFin,typeConge,date) values (?,?,?,?,?,?);

	}

	function all() {
		$keyword = $this->input->get('keyword');
		$this->db->like(array('date'=>$keyword));
		return $demande_conge = $this->db->get('demande_conge')->result_array();  // SELECT * from demande_conge;
	}

	function getDemandeConge($idPers) {
		$this->db->where('idPers',$idPers);
		 return $DemandeConge = $this->db->get('demande_conge')->row_array(); // SELECT * from demande_conge where idPers = ? ;

	}
	function updateDemandeConge($idPers,$formArray){
		$this->db->where('idPers' ,$idPers);
		$this->db->update('demande_conge',$formArray);// Update demande_conge
	}
	function deleteDemandeConge($idPers) {
		$this->db->where('idPers',$idPers );
		$this->db->delete('demande_conge');

	}


}





 ?>