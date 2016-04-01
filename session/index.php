<?php
	session_start();

	$err = filter_input(INPUT_GET, 'err');

	function msg()
	{
		
		if (!empty($err))
		{
			switch ($err) 
			{
				case '1':
					echo "login ou mot de passe incorrect";
					break;
				case '2':
					echo "Veuillez renseigner un login";
					break;
				case '3':
					echo "Veuillez renseigner un mot de passe";
					break;
				case '4':
					echo "Poisson d'avril";
					break;
				case '5':
					echo "A +";
					break;
				case '6':
					echo "time out";
					break;
				
				default:
					echo "Oups";
					break;
			}
		}
	}

	function affiche_login()
	{	
		//GLOBAL permet d'utiliser la variable $err dans la fonction
		GLOBAL $err;
		// si on veut que l'utilisateur a dejà le cookie isset($_SESSION['login']) 
		// sinon le code suivant montre jusque le cas du time out
		if (!empty($err) and ($err == 5 or $err == 6) )
		{
			return "value=\"".$_SESSION['login']."\"";
		}	
		else
		{
			return "autofocus value=\"\"";
		}
	}
	function saisie_mdp()
	{	
		GLOBAL $err;
		if (!empty($err) and ($err == 5 or $err == 6) )
		{
			return "autofocus";
		} 
	}


?>


<html>
	<head>
		<link href="/session/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <link href="/session/bootstrap/docs/examples/signin/signin.css" rel="stylesheet">
		<title><?php echo $title; ?></title>
	</head>
	<body>
	    <div class="container">
	      <form class="form-signin" action="connexion.php" method="POST">
	        <h2 class="form-signin-heading">Authentification</h2>
	        <label for="inputEmail" class="sr-only">login</label>
	        <input type="text" id="inputEmail" class="form-control" required  placeholder="Login" <?php echo affiche_login(); ?> name="login">
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" class="form-control" placeholder="Password" <?php echo saisie_mdp(); ?> required name="password">
	        <!--div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	          </label>
	        </div-->
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	        <p><?php msg(); ?></p>
	      </form>

	    </div> <!-- /container -->
	  </body>
</html>





