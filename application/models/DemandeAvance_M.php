<?php 
class DemandeAvance_M extends CI_model {

	function DemandeAvance($formArray)
	{
		$this->db->insert('demande_avance',$formArray); // INSERT INTO demande_avance (nom,prenom,matricule,service,avance,date) values (?,?,?,?,?,?);

	}

	function all() {
		$keyword = $this->input->get('keyword');
		$this->db->like(array('date'=>$keyword));
		return $demande_avance = $this->db->get('demande_avance')->result_array();  // SELECT * from demande_avance;
	}

	function getDemandeAvance($idPers) {
		$this->db->where('idPers',$idPers);
		 return $DemandeAvance = $this->db->get('demande_avance')->row_array(); // SELECT * from demande_avance where idPers = ? ;

	}
	function updateDemandeAvance($idPers,$formArray){
		$this->db->where('idPers' ,$idPers);
		$this->db->update('demande_avance',$formArray);
	}
	function deleteDemandeAvance($idPers) {
		$this->db->where('idPers',$idPers );
		$this->db->delete('demande_avance');

	}



}





 ?>