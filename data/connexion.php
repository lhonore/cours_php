<?php
	
	#ini_set("dispalay_errors","off")
	# require "malib-inc.php" ;
	# include_once "head-inc.php";

	$login = filter_input(INPUT_POST, 'login');
	$password = filter_input(INPUT_POST, 'password');

	/*$ligne = file("logins.txt", FILE_IGNORE_NEW_LINES);*/
	#echo var_dump($ligne);
	if (empty($login) ){
		header("Location: index.php?err=2");
		exit;
	}
	elseif (empty($password)) {
		header("Location: index.php?err=3");
		exit;
	}
	/*for($i=0;$i<count($ligne);$i++){
		list($flogin,$fpassword) = explode(':',$ligne[$i]);
		if($login===$flogin and $password===$fpassword){
			$user = $login;
			header("Location: accueil.php");
			exit;
		}
		
	}
	header("Location: index.php?err=1");
	exit;*/

	//ouverture d'u fichier
	$ref_fichier = fopen("logins.txt","r");
	//lecture de chaque ligne jusqu'à la fin
	while ($ligne = fgets($ref_fichier)){
		$ligne = rtrim($ligne);
		list($flogin,$fpassword) = explode(':',$ligne);
		if($login===$flogin and $password===$fpassword){
			$user = $login;
			fclose($ref_fichier);
			$ref_log = fopen("log.txt","a+");
			fputs($ref_log, date("Y-m-d H:i:s")." : $login\r\n");
			fclose($ref_log);
			header("Location: accueil.php");
			exit;
		}
	}
	fclose($ref_fichier);

?>
</body>
</html>
