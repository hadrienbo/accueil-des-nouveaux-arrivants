<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Biienvenue :: ajouter eleve</title>

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
	
	<form action="comptes.php" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Pseudo</label>
			<input class="form-control" id="pseudo" name="pseudo" aria-describedby="emailHelp" placeholder="Entrer le Pseudo de l'élève">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email ENSIIE</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer l'email ENSIIE de l'élève">
		</div>
		<input type="checkbox" name="tuteur" value=true> Tuteur <br><br>
		<div class="form-group">
			<label for="exampleInputEmail1">Compétence</label>
			<input class="form-control" id="competence" name="competence" aria-describedby="emailHelp" placeholder="Entrez si besoin la competence de l'élève">
		</div>
		<button type="submit" class="btn btn-info submit-button" id="login-button" name="login_button" value="Add">Ajouter élève</button>
		
	</form>
	
	
	
	
	
	
	</div>
	</div>
	</div>
	</body>
</html>