<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	$reponseee = $bdd->query('SELECT * FROM achievementsdonebyeleves');
	$s=0;
	$l=0;
	if (isset($_POST['pass']) AND isset($_POST['email']))
	{
		while($donnees = $reponse->fetch())
		{
			if($donnees['Mail']==$_POST['email']) 
			{
				if($donnees['Password']==$_POST['pass'])
				{
					?>
					<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
					<a class="navbar-brand" href="#">
					
					<?php 
					echo htmlspecialchars($donnees['Pseudo']);
					?>
					</a>
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Achievements</a>
					</li>
					</ul>
					<?php 
					if($donnees['Admin'] == 1){
					echo '<a class="nav-link" href="comptes.php"> Comptes </a>';
					}
					?>
					<a class="btn mb-3 mb-md-0 ml-md-3" href="home.php">Déconnexion</a>
					</nav>
					<body>
					<br/>
					<div class="table-wrapper">
					<div class="table-title">        
					<h2>Achievements</b></h2>						
					
					<?php 
					if($donnees['Admin']==1)
					{
						echo '<span class="float-right">';			
						echo '<a href="ajouterachievement.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> Ajouter achievement</a>';					
						echo '</span>';
						echo '</div>';
						echo '<table class="table table-striped table-hover">';
						echo '    <thead>';
						echo '        <tr>';
						echo '            <th>#</th>';
						echo '            <th>Achievement</th>';						
						echo '			  <th>Date</th>';
						echo '			  <th>Competence requise</th>';
						echo '            <th>Tuteur</th>';
						echo '        </tr>';
						echo '    </thead>';
				
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
					}				
				 
					if($donnees['Admin']==0 and $donnees['Tuteur']==1)
					{				
						echo '</span>';
						echo '</div>';
						echo '<table class="table table-striped table-hover">';
						echo '    <thead>';
						echo '        <tr>';
						echo '          <th>#</th>';
						echo '          <th>Mes Achievement en tant que tuteur</th>';						
						echo '			<th>Date</th>';
						echo '        </tr>';
						echo '    </thead>';
				
						while($donneess = $reponsee->fetch())
						{ 
							if($donnees['Pseudo']==$donneess['Tuteur'])
							{
							?>
								<tr>
								<td><?php echo htmlspecialchars($donneess['id']);?></td>
								<td><?php echo $donneess['Achievement'];
								
								if(strtotime('now')>strtotime($donneess['date']))
									{
										echo '<p style="color:red;"><small>Achievement passé : ';
										if($donneess['Appel']==0)
										{
											echo '<a href="appel.php">faire l\'appel</a>';
										}
										echo '</small></p>';
									}
									?></td>
								<td><?php echo htmlspecialchars($donneess['date']);?></td>                        
								
								</tr>
							<?php
							}
						}
					}
					if($donnees['Admin']==0 and $donnees['Tuteur']==0)
					{
						echo '</span>';
						echo '</div>';
						echo '<table class="table table-striped table-hover">';
						echo '    <thead>';
						echo '        <tr>';
						echo '          <th>#</th>';
						echo '          <th>Mes Achievement à accomplir</th>';						
						echo '			<th>Date</th>';
						echo '          <th>Tuteur</th>';
						echo '        </tr>';
						echo '    </thead>';
						
						$achievementsaccomplis = array();
						while($donneesss = $reponseee->fetch())
						{ 
							if($donneesss['Eleve']==$donnees['Pseudo'])
							{
								array_push($achievementsaccomplis,$donneesss['Achievement']);
							}
						}
						$achievementsavanttuteur=0;
						while($donneess = $reponsee->fetch())
						{
							
							if(!in_array($donneess['Achievement'],$achievementsaccomplis,false))
							{
							?>
							<tr>
								<td><?php echo htmlspecialchars($donneess['id']);?></td>
								<td><?php echo $donneess['Achievement'];
									if(strtotime('now')>strtotime($donneess['date']))
									{
										echo '<p style="color:red;"><small>Achievement passé</small></p>';
										$achievementsavanttuteur++;
									}
									
									?></td>
								<td><?php echo htmlspecialchars($donneess['date']);?></td>
								<td><?php echo $donneess['Tuteur'];?></td>																
							</tr>
							<?php	
							}
						}
						if($achievementsavanttuteur==0)
						{
							$idd=$donnees['id'];
							$promotion=$bdd->query("UPDATE eleves SET Tuteur = '1' WHERE id = '$idd' ");
						}
					}
							?>
				
			
                
					</table>
					</div>     
					</body>
					</div>
					</div>
					</body>
				
				<?php
				}
				else 
				{
					echo " <h1> mot de passe incorrect </h1>";
				}
			}
			else 
			{
				$s++;
			}
			$l++;	
		}
		if($l==$s)
		{
			echo " <h1> nom de compte incorrect </h1>";
		}
	}
	else
	{
		echo "<h1> Pas d'email ou de mot de passe envoyé au serveur </h1>";	
	}
				?>
	
	</div>
	</div>
	</div>
	</body>
</html>