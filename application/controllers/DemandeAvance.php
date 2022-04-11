<?php

	class DemandeAvance extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		function index() {
		$this->load->model('DemandeAvance_M');
		$demande_avance = $this->DemandeAvance_M->all();
		$data = array();
		$data['demande_avance'] = $demande_avance;
		$this->load->view('list_DemandeAvance',$data);


	}
		public function list_DemandeAvance(){
			$this->load->view('list_DemandeAvance');

		}

		public function DemandeAvance(){
			$this->load->model('DemandeAvance_M');

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('prenom','Prenom','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('avance','avance','required');
		$this->form_validation->set_rules('date','date','required');

		if ($this->form_validation->run() == false){
			$this->load->view('DemandeAvance');

			} else {


			$formArray = array();
			$formArray["nom"] = $this->input->post('nom');
			$formArray["prenom"] = $this->input->post('prenom');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["avance"] = $this->input->post('avance');
			$formArray["date"] = $this->input->post('date');

			$this->DemandeAvance_M->DemandeAvance($formArray);
			$this->session->flashdata('success','Record added successfully!');
			redirect(base_url().'index.php/DemandeAvance/DemandeAvance');



		}	
	}

		function ModifDemandeAvance($idPers)
	{
		$this->load->model('DemandeAvance_M');
		$DemandeAvance = $this->DemandeAvance_M->getDemandeAvance($idPers);
		$data = array();
		$data['DemandeAvance'] = $DemandeAvance;

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('prenom','Prenom','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('avance','avance','required');
		$this->form_validation->set_rules('date','date','required');
		$this->form_validation->set_rules('srh','SRH','required');
		$this->form_validation->set_rules('direction','Direction','required');
		$this->form_validation->set_rules('comptable','Comptable','required');
		

		if($this->form_validation->run() == false) {
			$this->load->view('ModifDemandeAvance',$data);

		}else {

			$formArray = array();
			$formArray["nom"] = $this->input->post('nom');
			$formArray["prenom"] = $this->input->post('prenom');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["avance"] = $this->input->post('avance');
			$formArray["date"] = $this->input->post('date');
			$formArray["srh"] = $this->input->post('srh');
			$formArray["direction"] = $this->input->post('direction');
			$formArray["comptable"] = $this->input->post('comptable');
			
			$this->DemandeAvance_M->updateDemandeAvance($idPers,$formArray );
			$this->session->flashdata('success','Record updated successfully');
			redirect(base_url().'index.php/DemandeAvance/index');

		}

	}
	function delete($idPers)
		{
			$this->load->model('DemandeAvance_M');
			$DemandeAvance = $this->DemandeAvance_M->getDemandeAvance($idPers);
			if(empty($DemandeAvance)) {
				$this->session->flashdata('failure','Record not found in database');
				redirect(base_url().'index.php/DemandeAvance/index');
			}

			$this->DemandeAvance_M->deleteDemandeAvance($idPers);
			$this->session->flashdata('success','Record deleted successfully');
			redirect(base_url().'index.php/DemandeAvance/index');
	
		}




	}

?>