<!DOCTYPE html>
<html>
<head>
<mete charset="utf-8"> 
	<meta name="viewport" content="width=device=width, initial-scal=1">
	<title>Gestion du congé JIRAMA Haut Matsiatra</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fontawesome/css/fontawesome.min.css';?>">

	<style type="text/css">
	body{
		background-color: #829dea; 

	}
	#form{
		background-color: white;
		border: 1px solid;
		margin-top: 150px;
		margin-left: 400px;
		margin-right: 200px;
	}
	#cs{
		float: center;
	}
	#sc{
		text-align: center;
		margin-left: 120px;
		margin-right: 200px;
	}





	</style>




</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="form">
				<h2>AUTHENTIFICATION</h2>
				<img id="cs" width="100px" src="<?php echo base_url(); ?>assets/images/srh.jpg">
				<img id="cs" width="100px" src="<?php echo base_url(); ?>assets/images/srh.jpg">
				<img id="cs" width="100px" src="<?php echo base_url(); ?>assets/images/srh.jpg">
				<form action="" method="POST">
					<div class="form-group">
						<label for="nom_utilisateur"></label>
						<input type="text" name="nom_utilisateur" id="utilisateur" class="form-control" placeholder="Saisir votre nom d'utilisateur">
					</div>
					<div class="form-group">
						<label for="mot_de_passe"></label>
						<input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control" placeholder=" Saisir votre mot_de_passe">	
					</div>
					<input id="sc" type="submit" value="Se connecter" class="btn btn-primary"></br></br>

				</form>

				
			</div>
		
	</div>
</body>
</html>