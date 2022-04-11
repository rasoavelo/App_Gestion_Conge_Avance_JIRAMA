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
			margin-right: 485px;
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
			 <h2><B><U> Modification du renseignement du personnel</U></B></h2>
			 <form method="post" class="form-group" name="Avance" action="<?php echo base_url().'index.php/Personnels/ModifPersonnels/'.$Personnels['idPers'];?>">
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>Nom*:</label>
			 			<input type="text" name="nomPers" value="<?php echo set_value('nomPers',$Personnels['nomPers']);?>" class="form-control" placeholder="Saisir votre nom">
			 			
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Prenom:</label>
			 			<input type="text" name="prenomPers" value="<?php echo set_value('prenomPers',$Personnels['prenomPers']);?>" class="form-control" placeholder="Saisir votre prenom">	
			 		</div>
			 	</div>
			 		<div class="row">
			 		<div class="col-lg-6">
			 			<label>Sexe*:</label>
			 			<input type="text" name="sexe" value="<?php echo set_value('sexe',$Personnels['sexe']);?>" class="form-control" placeholder="choisir votre sexe">
			 			
			 		</div>
			 		<div class="col-lg-6">
			 			<label>CIN:</label>
			 			<input type="text" name="cin" value="<?php echo set_value('cin',$Personnels['cin']);?>" class="form-control" placeholder="Saisir votre CIN">	
			 		</div>
			 	</div>

			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>Service*:</label>
			 			<input type="text" name="service" value="<?php echo set_value('service',$Personnels['service']);?>" class="form-control" placeholder="Saisir votre service">
			 			
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Matricule*:</label>
			 			<input type="number" name="matricule" value="<?php echo set_value('matricule',$Personnels['matricule']);?>" class="form-control" placeholder="Saisir votre matricule">
			 			
			 		</div>
			 	</div>
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<label>DateEmbauche*:</label>
			 			<input type="date" name="dateEmbauche" value="<?php echo set_value('dateEmbauche',$Personnels['dateEmbauche']);?>" class="form-control" placeholder="Saisir votre date d'embauchage">
			 			
			 		</div>
			 		<div class="col-lg-6">
			 			<label>Tel:</label>
			 			<input type="number" name="tel" value="<?php echo set_value('tel',$Personnels['tel']);?>" class="form-control" placeholder="Saisir votre numero telephone">
			 			
			 		</div>
			 	</div>
			 	</br></br>
			 	<div class="row">
			 		<div class="col-lg-6">
			 			<div class="form-group">
						<button class="btn btn-warning">Ajouter</button>
						</div>	
			 		</div>
			 		<div class="col-lg-6">
			 			<div class="form-group">
 	 	 					<a class="btn btn-warning" href="<?php base_url().'index.php/Personnels/index';?>">Annuler</a>
						</div>

			 			
			 		</div>
			 		<div class="row">

			 		<div class="col-lg-6">
			 			<div class="form-group">
			 				<center><a class="btn btn-primary" href="http://localhost/AppliJIRAMA/index.php/Personnels/index"><h4> Liste Personnels</h4></a></center>
 	 	 					
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