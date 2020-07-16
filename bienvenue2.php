<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biienvenue</title>

    <!-- Bootstrap -->
	<link href="bootstrap.css" rel="stylesheet" type="text/css" />

  </head>
	<body class="modal-form">
	<div class="modal-form">		
	<div class="container class="modal-form"">
	<br/>
	<div class="card mx-auto border-0" style="width: 70rem;">
	<img class="card-img-top mx-auto" src="logo(entier).png" alt="Card image cap" style="width: 400px">
	<div class="card-body">
    <?php	
	$bdd=new PDO('mysql:host=localhost;dbname=accueil','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$reponse = $bdd->query('SELECT * FROM eleves');
	$reponsee = $bdd->query('SELECT * FROM achievements');
	
	if(isset($_POST['achievement']) AND isset($_POST['date']) AND isset($_POST['competence']))
	{
		$achievement=$_POST['achievement'];
		$date=$_POST['date'];
		$competence=$_POST['competence'];
		$tuteur=NULL;
		while($donnees = $reponse->fetch())
		{
			if(isset($competence)==false OR $donnees['Competences']==$competence)
			{
				$tuteur=$donnees['Pseudo'];				
			}
		}
		$reponseeee=$bdd->query("INSERT INTO achievements (id, Achievement, date, CompetenceRequise, Tuteur, Appel) VALUES (NULL, '$achievement', '$date', '$competence', '$tuteur', '0')");
	}
	
	?>
					<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
					<a class="navbar-brand" href="#">admin</a>
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Achievements</a>
					</li>
					</ul>

					<a class="nav-link" href="comptes.php"> Comptes </a>
					<a class="btn mb-3 mb-md-0 ml-md-3" href="home.php">Déconnexion</a>
					</nav>
					<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
<body>
    <br/>
        <div class="table-wrapper">
			 <div class="table-title">
				        
			<h2>Achievements</b></h2>						
					
			<span class="float-right">			
					<a href="ajouterachievement.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> Ajouter achievement</a>				
			</span>
			</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Achievement</th>						
						<th>Date</th>
						<th>Competence requise</th>
                        <th>Tuteur</th>
                    </tr>
                </thead>

				<?php
				while($donneess = $reponsee->fetch())
				{ ?>
                    <tr>
                    <td><?php echo htmlspecialchars($donneess['id']);?></td>
                    <td><?php echo htmlspecialchars($donneess['Achievement']);?></td>
                    <td><?php echo htmlspecialchars($donneess['date']);?></td>                        
                    <td><?php echo htmlspecialchars($donneess['CompetenceRequise']);?></td>
					<td><?php echo htmlspecialchars($donneess['Tuteur']);?></td>
					<td><a href="#" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a></td>
					<td><a href="#" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a></td>
                    </tr>
					<?php
				}				
				?>
            </table>
    </div>     
</body>
				
	</div>
	</div>
	</div>
	</body>
</html>