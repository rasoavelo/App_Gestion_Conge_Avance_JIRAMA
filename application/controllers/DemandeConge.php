<?php

	class DemandeConge extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		function index() {
		$this->load->model('DemandeConge_M');
		$demande_conge = $this->DemandeConge_M->all();
		$data = array();
		$data['demande_conge'] = $demande_conge;
		$this->load->view('list_DemandeConge',$data);


	}
		public function list_DemandeConge(){
			$this->load->view('list_DemandeConge');

		}

		public function DemandeConge(){
			$this->load->model('DemandeConge_M');

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('prenom','Prenom','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('dateDebut','DateDebut','required');
		$this->form_validation->set_rules('dateFin','DateFin','required');
		$this->form_validation->set_rules('jour','Jour','required');
		$this->form_validation->set_rules('typeConge','TypeConge','required');
		$this->form_validation->set_rules('date','date','required');

		if ($this->form_validation->run() == false){
			$this->load->view('DemandeConge');

			} else {


			$formArray = array();
			$formArray["nom"] = $this->input->post('nom');
			$formArray["prenom"] = $this->input->post('prenom');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["dateDebut"] = $this->input->post('dateDebut');
			$formArray["dateFin"] = $this->input->post('dateFin');
			$formArray["jour"] = $this->input->post('jour');
			$formArray["typeConge"] = $this->input->post('typeConge');
			$formArray["date"] = $this->input->post('date');
			$this->DemandeConge_M->DemandeConge($formArray);
			$this->session->flashdata('success','Record added successfully!');
			redirect(base_url().'index.php/DemandeConge/DemandeConge');



		}	
	}
	function ModifDemandeConge($idPers)
	{
		$this->load->model('DemandeConge_M');
		$DemandeConge = $this->DemandeConge_M->getDemandeConge($idPers);
		$data = array();
		$data['DemandeConge'] = $DemandeConge;

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('prenom','Prenom','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('dateDebut','DateDebut','required');
		$this->form_validation->set_rules('dateFin','DateFin','required');
		$this->form_validation->set_rules('jour','Jour','required');
		$this->form_validation->set_rules('typeConge','TypeConge','required');
		$this->form_validation->set_rules('date','date','required');
		$this->form_validation->set_rules('chefService','ChefService','required');
		$this->form_validation->set_rules('srh','SRH','required');
		$this->form_validation->set_rules('direction','Direction','required');

		if($this->form_validation->run() == false) {
			$this->load->view('ModifDemandeConge',$data);

		}else {

			$formArray = array();
			$formArray["nom"] = $this->input->post('nom');
			$formArray["prenom"] = $this->input->post('prenom');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["dateDebut"] = $this->input->post('dateDebut');
			$formArray["dateFin"] = $this->input->post('dateFin');
			$formArray["jour"] = $this->input->post('jour');
			$formArray["typeConge"] = $this->input->post('typeConge');
			$formArray["date"] = $this->input->post('date');
			$formArray["chefService"] = $this->input->post('chefService');
			$formArray["srh"] = $this->input->post('srh');
			$formArray["direction"] = $this->input->post('direction');
			
			$this->DemandeConge_M->updateDemandeConge($idPers,$formArray );
			$this->session->flashdata('success','Record updated successfully');
			redirect(base_url().'index.php/DemandeConge/index');

		}

	}

	function delete($idPers)
		{
			$this->load->model('DemandeConge_M');
			$DemandeConge = $this->DemandeConge_M->getDemandeConge($idPers);
			if(empty($DemandeConge)) {
				$this->session->flashdata('failure','Record not found in database');
				redirect(base_url().'index.php/DemandeConge/index');
			}

			$this->DemandeConge_M->deleteDemandeConge($idPers);
			$this->session->flashdata('success','Record deleted successfully');
			redirect(base_url().'index.php/DemandeConge/index');
	
		}






	}

?>