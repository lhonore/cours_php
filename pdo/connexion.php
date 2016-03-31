<?php
	
	#ini_set("dispalay_errors","off")
	# require "malib-inc.php" ;
	include_once "db.php";
	
	$login = filter_input(INPUT_POST, 'login');
	$password = filter_input(INPUT_POST, 'password');


	if (empty($login) )
	{
		header("Location: index.php?err=2");
		exit;
	}
	elseif (empty($password))
	{
		header("Location: index.php?err=3");
		exit;
	}
	
	$auth = bd_login($login,$password);
	
	if ($auth)
	{
		header("Location: accueil.php");
	}else{
		header("Location: index.php?err=1");
	}

?>
</body>
</html>
