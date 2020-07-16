<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Biienvenue :: ajouter achievement</title>

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
	
	<form action="bienvenue2.php" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Achievement</label>
			<input class="form-control" id="achievement" name="achievement" placeholder="Entrer le nom de l'achievement">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Date</label>
			<input type="date" class="form-control" id="date" name="date" placeholder="Entrer la date à laquelle aura lieu l'achievement">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Competence requise pour le tuteur</label>
			<input class="form-control" id="competence" name="competence" placeholder="Dire (s'il y en a une) la compétence requise pour le tuteur de cet achievement">
		</div>
		<button type="submit" class="btn btn-info submit-button" id="login-button" name="login_button" value="Add">Ajouter achievement</button>
	</form>
	
	
	
	
	
	
	</div>
	</div>
	</div>
	</body>
</html>