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
	if(isset($_POST['pseudo']) AND isset($_POST['email']))
	{
		$pseudo=$_POST['pseudo'];
		$email=$_POST['email'];
		if(isset($_POST['tuteur']) AND $_POST['tuteur']==true)
		{
			$tuteur=1;
		}
		else 
		{
			$tuteur=0;
		}
		$competence=$_POST['competence'];
		$reponseeee=$bdd->query("INSERT INTO eleves (Pseudo, Mail, Password, Tuteur, Admin, Competences, id) VALUES ('$pseudo', '$email', '0000', '$tuteur', 0, '$competence', NULL)");
	}
	?>
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
					<a class="navbar-brand" href="#">admin</a>
					<a class="nav-link" href="bienvenue2.php">Achievements</a>
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#"> Comptes </a>
					</li>
					</ul>
					<a class="btn mb-3 mb-md-0 ml-md-3" href="home.php">Déconnexion</a>
					</nav>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
    <br/>
        <div class="table-wrapper">
			 <div class="table-title">
				        
			<h2>Comptes</b></h2>						
					
		
			<span class="float-right">
					<a href="ajoutereleve.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> Ajouter élève</a>					
			</span>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pseudo</th>						
						<th>Email</th>
						<th>Tuteur</th>
                        <th>Compétences</th>
                    </tr>
                </thead>

				<?php	
				while($donnees = $reponse->fetch())
				{ ?>
                    <tr>
                    <td><?php echo htmlspecialchars($donnees['id']);?></td>
                    <td><?php echo htmlspecialchars($donnees['Pseudo']);?></td>
                    <td><?php echo htmlspecialchars($donnees['Mail']);?></td>                        
                    <?php
					if($donnees['Tuteur']==1)
					{
						echo "<td>Oui</td>";  
					}
					else
					{
						echo "<td>Non</td>";  
					}
					?>
					<td><?php echo htmlspecialchars($donnees['Competences']);?></td>
					<td><a href="comptes.php" class="settings" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a></td>
					<td><a href="comptes.php" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a></td>
                    </tr>
					<?php
				}	
				?>
          
            </table>
    </div>     
</body>
</div>
	</div>
	</body>
</html>                               		                            