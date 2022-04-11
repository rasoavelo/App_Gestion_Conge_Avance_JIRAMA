<?php

	class Personnels extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		function index() {
		$this->load->model('Personnels_M');
		$personnels = $this->Personnels_M->all();
		$data = array();
		$data['personnels'] = $personnels;
		$this->load->view('list_Personnels',$data);


	}
		public function list_Personnels(){
			$this->load->view('list_Personnels');

		}

		public function Personnels(){
			$this->load->model('Personnels_M');

		$this->form_validation->set_rules('nomPers','Nom','required');
		$this->form_validation->set_rules('prenomPers','Prenom','required');
		$this->form_validation->set_rules('sexe','Sexe','required');
		$this->form_validation->set_rules('cin','CIN','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('dateEmbauche','DateEmbauche','required');
		$this->form_validation->set_rules('tel','Tel','required');

		if ($this->form_validation->run() == false){
			$this->load->view('Personnels');

			} else {


			$formArray = array();
			$formArray["nomPers"] = $this->input->post('nomPers');
			$formArray["prenomPers"] = $this->input->post('prenomPers');
			$formArray["sexe"] = $this->input->post('sexe');
			$formArray["cin"] = $this->input->post('cin');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["dateEmbauche"] = $this->input->post('dateEmbauche');
			$formArray["tel"] = $this->input->post('tel');
			$this->Personnels_M->Personnels($formArray);
			$this->session->flashdata('success','Record added successfully!');
			redirect(base_url().'index.php/Personnels/index');



		}	
	}
		function ModifPersonnels($idPers)
	{
		$this->load->model('Personnels_M');
		$Personnels = $this->Personnels_M->getPersonnels($idPers);
		$data = array();
		$data['Personnels'] = $Personnels;

		$this->form_validation->set_rules('nomPers','Nom','required');
		$this->form_validation->set_rules('prenomPers','Prenom','required');
		$this->form_validation->set_rules('sexe','Sexe','required');
		$this->form_validation->set_rules('cin','CIN','required');
		$this->form_validation->set_rules('matricule','Matricule','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('dateEmbauche','DateEmbauche','required');
		$this->form_validation->set_rules('tel','Tel','required');


		if($this->form_validation->run() == false) {
			$this->load->view('ModifPersonnels',$data);

		}else {

			$formArray = array();
			$formArray["nomPers"] = $this->input->post('nomPers');
			$formArray["prenomPers"] = $this->input->post('prenomPers');
			$formArray["sexe"] = $this->input->post('sexe');
			$formArray["cin"] = $this->input->post('cin');
			$formArray["matricule"] = $this->input->post('matricule');
			$formArray["service"] = $this->input->post('service');
			$formArray["dateEmbauche"] = $this->input->post('dateEmbauche');
			$formArray["tel"] = $this->input->post('tel');
			
			$this->Personnels_M->updatePersonnels($idPers,$formArray );
			$this->session->flashdata('success','Record updated successfully');
			redirect(base_url().'index.php/Personnels/index');

		}
	}
	function delete($idPers)
		{
			$this->load->model('Personnels_M');
			$Personnels = $this->Personnels_M->getPersonnels($idPers);
			if(empty($Personnels)) {
				$this->session->flashdata('failure','Record not found in database');
				redirect(base_url().'index.php/Personnels/index');
			}

			$this->Personnels_M->deletePersonnels($idPers);
			$this->session->flashdata('success','Record deleted successfully');
			redirect(base_url().'index.php/Personnels/index');
	
		}




	}

?>