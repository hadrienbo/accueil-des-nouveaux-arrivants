<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Biienvenue :: changer son mot de passe</title>

    <!-- Bootstrap -->
	<link href="bootstrap.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body class="modal-form">
	<div class="modal-form">		
	<div class="container class="modal-form"">
	<br/>
	<div class="card mx-auto border-0" style="width: 70rem;">
	<img class="card-img-top mx-auto" src="logo(entier).png" alt="Card image cap" style="width: 400px">
	<div class="card-body">
	
	<form action="home.php" method="post">

		<div class="form-group">
			<label for="exampleInputEmail1">Email ENSIIE</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer l'email ENSIIE de l'élève">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Mot de passe actuel</label>
			<input type="password" class="form-control" id="pass0" name="pass0" placeholder="Mot de passe">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Nouveau mot de passe</label>
			<input type="password" class="form-control" id="pass1" name="pass1" placeholder="Nouveau mot de passe">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Répéter le nouveau mot de passe</label>
			<input type="password" class="form-control" id="pass2" name="pass2" placeholder="Nouveau mot de passe">
		</div>
		
		<button type="submit" class="btn btn-info submit-button" id="login-button" name="login_button" value="Add">Changer le mot de passe</button>
		
	</form>
	
	
	
	
	
	
	</div>
	</div>
	</div>
	</body>
</html>