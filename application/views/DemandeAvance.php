<!DOCTYPE html>
<html>
<head>
	<mete charset="utf-8"> 
	<meta name="viewport" content="width=device=width, initial-scal=1">
	<title>Gestion du congé JIRAMA Haut Matsiatra</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fontawesome/css/fontawesome.min.css';?>">
	<style>
		body{
			margin-bottom: 20px;
			margin-left: 50px;
			margin-right: 50px;

		 }

		 #header {
		 	height: 100px;
		 	background-color: #829dee;
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
			font-size: 13px;
		}

		#sidebar{
			height: 450px;

		 	background-color:  #829dee;
		 	border: 2px solid white;
		 	text-align: center;

		}

		#maincontent{
			height: 450px;
		 	background-color:  white;
		 	border: 2px solid black;
		 	text-align: center;

		}
		#nav{
			float: right;
		}
		h4{
			float: center;
			margin-right: 425px;
			margin-left: 300px;
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
						<li><h1><B> Gestion du congé de la JIRAMA Haut Matsiatra</B></h1></li>	
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
			<div id="sidebar" class="col-md-3">
			<img src="<?php echo base_url(); ?>assets/images/fm.PNG">	
			</div>
			<div id="maincontent" class="col-md-9">
			 <h2><B><U> DEMANDE  D'AVANCE</U></B></h2>
			 <form method="post" class="form-group" name="Avance" action="<?php echo base_url().'index.php/DemandeAvance/DemandeAvance';?>">
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>Nom*:</label>
			 			<input type="text" name="nom" value="<?php echo set_value('nom');?>" class="form-control" placeholder="Saisir votre nom">
			 			<?php echo form_error('nom');?>
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Prenom:</label>
			 			<input type="text" name="prenom" value="<?php echo set_value('prenom');?>" class="form-control" placeholder="Saisir votre prenom">	
			 			<?php echo form_error('prenom');?>
			 		</div>
			 	</div>

			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>Service*:</label>
			 			<input type="text" name="service" value="<?php echo set_value('service');?>" class="form-control" placeholder="Saisir votre service">
			 			<?php echo form_error('service');?>
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Matricule*:</label>
			 			<input type="number" name="matricule" value="<?php echo set_value('matricule');?>" class="form-control" placeholder="Saisir votre matricule">
			 			<?php echo form_error('matricule');?>
			 		</div>
			 	</div>
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>Avance*:</label>
			 			<input type="text" name="avance" value="<?php echo set_value('avance');?>" class="form-control" placeholder="Saisir votre avance maximun 150000ar">
			 			<?php echo form_error('avance');?>
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Date:</label>
			 			<input type="date" name="date" value="<?php echo set_value('date');?>" class="form-control" placeholder="Saisir la date fin du congé">
			 			<?php echo form_error('date');?>
			 		</div>
			 	</div>
			 	</br></br>
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<div class="form-group">
						<button class="btn btn-warning"><span class="glyphicon glyphicon-ok-circle"></span>Envoyer</button>
						</div>	
			 		</div>
			 		<div class="col-lg-6">
			 			<div class="form-group">
 	 	 					<a class="btn btn-warning" href="<?php base_url().'index.php/DemandeAvance/index';?>"><span class="glyphicon glyphicon-ban-circle"></span>Annuler</a>
						</div>	
			 		</div>
			 	</div>

			 </form>
			</div>
		</div>

<!--</div>-->

	<script type="text/javascript" src="<?php echo base_url().'assets/jquery/jquery.min.js';?>"></script>
	
</body>
</html>