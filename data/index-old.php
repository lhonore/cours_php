<?php
	
	#ini_set("dispalay_errors","off")
	require "malib-inc.php" ;
	include_once "head-inc.php";

	echo '<ul>';
	$ligne = file("logins.txt", FILE_IGNORE_NEW_LINES);
	#echo var_dump($ligne);
	for($i=0;$i<count($ligne);$i++){
		$e = $i+1;
		$z = explode(':',$ligne[$i]);
		echo "<li>ligne $e du fichier: <ul><li>login: $z[0]</li><li>password: $z[1]</li></ul><br/>";
	}
	echo '</ul>';


/*	echo "Valeur obtenue: ".filter_input(INPUT_POST, 'login').'<br/>';
	$login = filter_input(INPUT_POST, 'nb1');
	echo "Valeur obtenue: ".filter_input(INPUT_POST, 'password').'<br/>';
	$passwor = filter_input(INPUT_POST, 'nb2');
	echo "</br/>";
	echo "</br/>";
	echo "</br/>";*/

	# $result = pourcentage($nb1,$nb2);
	# echo "resultat : $result";


?>
</body>
</html>
