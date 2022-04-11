<?php 
class Personnels_M extends CI_model {

	function Personnels($formArray)
	{
		$this->db->insert('personnels',$formArray);

	}

	function all() {
		$keyword = $this->input->get('keyword');
		$this->db->like(array('matricule'=>$keyword));
		return $personnels = $this->db->get('personnels')->result_array();
	}

	function getPersonnels($idPers) {
		$this->db->where('idPers',$idPers);
		 return $Personnels = $this->db->get('personnels')->row_array();

	}
	function updatePersonnels($idPers,$formArray){
		$this->db->where('idPers' ,$idPers);
		$this->db->update('personnels',$formArray);
	}
	function deletePersonnels($idPers) {
		$this->db->where('idPers',$idPers );
		$this->db->delete('personnels');

	}




}





 ?>