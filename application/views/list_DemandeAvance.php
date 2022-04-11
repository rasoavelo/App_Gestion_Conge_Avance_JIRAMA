<!DOCTYPE html>
<html>
<head>
	<mete charset="utf-8"> 
	<meta name="viewport" content="width=device=width, initial-scal=1">
	<title>Gestion du congé JIRAMA Haut Matsiatra</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fontawesome/css/fontawesome.min.css';?>">
	<style>
		body{
			margin-top: 5px;
			margin-bottom: 20px;
			margin-left: 50px;
			margin-right: 50px;

		 }

		 #header {
		 	height: 100px;
		 	background-color: #829dea;
		 	border: 2px solid white;
		 	text-align: center;
		 }

		 #navbar {
		 	height: 70px;
		 	background-color: #f28b08;
		 	border: 2px solid white;
		 }
		a {
			color: black;
			font-size:13px; 
		}

		#sidebar{
			height: 450px;

		 	background-color:  black;
		 	border: 2px solid white;
		 	text-align: center;

		}

		#maincontent{
			height: 450px;
		 	background-color:  #171111;
		 	border: 2px solid black;
		 	text-align: center;

		}

		#footer{
			height: 150px;
		 	background-color:  white;
		 	border: 2px solid black;
		 	text-align: center;

		}
		#form{
			text-align: right;
			float: right;
		}
		#nav{
			float: right;
		}
		#srh{
			color: red;
		}



	</style>
</head>
<body>
		<div class="container-fixed">
		<div id="header" class="row">
			<div class="col-md-12">
				<div class="navbar navbar">
					<ul class="nav navbar-nav">
						<li><img width="120px" height="90px" src="<?php echo base_url(); ?>assets/images/logo.gif"></li>
						<li><h1><B>Gestion du congé de la JIRAMA Haut Matsiatra</B></h1></li>	
					</ul>
				</div>
			</div>
		</div>

		<div id="navbar" class="row">
			<div class="col-md-12">
				<div class="navbar">
					<div class="container">
						<a href="<?php echo base_url().'index.php/Accueil/Accueil';?>" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Accueil</a>
						<div class="navbar-brand" id="nav">
						<a  href="<?php echo base_url().'index.php/DemandeConge/DemandeConge';?>"><span class="glyphicon glyphicon-book"></span>Demander un congé</a>
						<a href="<?php echo base_url().'index.php/DemandeAvance/DemandeAvance';?>"><span class="glyphicon glyphicon-book"></span>Demander un Avance</a>
						<a href="<?php echo base_url().'index.php/AuthentificationCs/AuthentificationCs';?>"><span class="glyphicon glyphicon-user"></span>Chef de Service</a>
						<a href="<?php echo base_url().'index.php/AuthentificationSrh/AuthentificationSrh';?>"><span class="glyphicon glyphicon-user"></span>SRH</a>
						<a href="<?php echo base_url().'index.php/AuthentificationDirection/AuthentificationDirection';?>"><span class="glyphicon glyphicon-user"></span>Direction</a>
						<a href="<?php echo base_url().'index.php/AuthentificationComptable/AuthentificationComptable';?>"><span class="glyphicon glyphicon-user"></span>Comptable</a>
						<a href="<?php echo base_url().'index.php/Personnels/index';?>"><span class="glyphicon glyphicon-th-list"></span> Liste Personnelles</a>
						</div>
					</div>	
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<?php
				$success = $this->session->userdata('success');
				if($success != ""){
				?>
				<div class="alert alert-success"><?php echo $success;?></div>
				<?php 
				} 
				?>
				<?php
				$failure = $this->session->userdata('failure');
				if($failure != ""){
				?>
				<div class="alert alert-success"><?php echo $failure;?></div>
				<?php 
				} 
				?>
				
			</div>
		
		</div>	

		
		
<div class="container" style="padding-top: 10px;">
	<h3><center><B><U> Liste des demandes d'avance </U></B> </center></h3>
	<div class="row">
		<div class="col-6" >
			<a href="<?php echo base_url().'index.php/DemandeAvance/DemandeAvance';?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Ajout</a>
		
		<form class="form-inline my-2 my-lg-0" id="form" method="get" action="<?php echo base_url().'index.php/DemandeAvance/index'?>">
		<input class="form-control mr-sm-2" type="rechercher" placeholder="Rechercher" aria-label="Rechercher" name="keyword">	
		<button class="btn btn-warning my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search" ></span> Rechercher</button>
		</form>
		</div>
	</div>

	
	
	<hr>
	<div class="row">
		
		<div class="col-md-10">
			<table class="table table-striped"> 
				<tr>
					<th>IdPers</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Matricule</th>
					<th>Service</th>
					<th>Avance</th>
					<th>Date</th>
					<th>SRH</th>
					<th>Direction</th>
					<th>Comptable</th>

					<th width="70">Modifier</th>
					<th width="70">Supprimer</th>

				</tr>

				<?php if(!empty($demande_avance)) { foreach($demande_avance as $DemandeAvance) {?>
				<tr>
					<td> <?php echo $DemandeAvance['idPers']?> </td>
					<td> <?php echo $DemandeAvance['nom']?> </td>
					<td> <?php echo $DemandeAvance['prenom']?> </td>
					<td> <?php echo $DemandeAvance['matricule']?> </td>
					<td> <?php echo $DemandeAvance['service']?> </td>
					<td> <?php echo $DemandeAvance['avance']?> </td>
					<td> <?php echo $DemandeAvance['date']?> </td>
					<td id="srh" > <?php echo $DemandeAvance['srh']?> </td>
					<td id="srh"> <?php echo $DemandeAvance['direction']?> </td>
					<td id="srh"> <?php echo $DemandeAvance['comptable']?> </td>
					<td>
						<a href="<?php echo base_url().'index.php/DemandeAvance/ModifDemandeAvance/'.$DemandeAvance['idPers']?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>Modifier</a>
					</td>
					<td>
						<a class="btn btn-warning"  href="<?php echo base_url().'index.php/DemandeAvance/delete/'.$DemandeAvance['idPers']?>"><span class="glyphicon glyphicon-remove"></span>Supprimer</a>
					</td>
					
				</tr>
				<?php } } else { ?>
				<tr>
					<td colspan="5">Records not found</td>
				</tr>

				<?php } ?>


			</table>
			
		</div>
		
	</div>
	
</div>

</body>
</html>