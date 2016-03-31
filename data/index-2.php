<?php
	#ini_set("dispalay_errors","off")
	
	include_once "head-inc.php";

	echo "Valeur obtenue: ".filter_input(INPUT_GET, 'nb');
	$nb = filter_input(INPUT_GET, 'nb');
	echo "</br/>";
	echo "</br/>";
	echo "</br/>";
	if (!isset($nb) or empty($nb)){
		echo "aucune donnée";
		exit;
	}
	elseif (! is_numeric($nb)){
		echo "la valeur n'est pas numérique";
		exit;
	}


	if ($nb <= 999){
		echo "$nb est compris entre 0 et 999";
	}elseif ($nb <= 9999) {
		echo "$nb est compris entre 1 000 et 9 999";
	}elseif ($nb<= 99999) {
		echo "$nb est compris entre 10 000 et 99 999";
	}elseif ($nb <= 1000000) {
		echo "$nb est compris entre 100 000 et 1 000 000";
	}else{
		echo "bon ba voila";
	}


	

	echo "</br/>";


	$date = date("Y/m/j H:i");
	echo var_dump($date);
	echo "</br/>";
	echo "<h2>Accueil</h2>";
	if (isset($date) and ! empty($date)){
		echo "$date: C'est l'heure de la pause !";
	}
	else {
		echo "Problème de date....";
	}
	echo "Le point permet de concaténé<br/>";
	echo "<br/>";
	$var1 = 15;
	echo "\$var 1 = $var1<br/>";
	$var1 += 15;
	echo "\$var1 += 15 donc = $var1<br/>";
	echo 'type de var1 :<br/>';
	echo var_dump($var1);
	echo "<br/>";
	$var2 = "15";
	echo $var2."<br/>";
	echo 'type de var2 :<br/>';
	echo var_dump($var2);
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	# Le 3 = tient compte du type, le 2 = ne tient pas compte
	echo "Avec === :<br/>";
	if ($var1 === $var2) {
		echo "les variables sont égales, mais pas de même type<br/>";
	}
	else {
		echo "les varaibles ne sont pas égales, car pas du même type<br/>";

	}
	echo "Avec == :<br/>";
	if ($var1 == $var2) {
		echo "les variables sont égales, mais pas de même type<br/>";
	}
	else {
		echo "les varaibles ne sont pas égales, car pas du même type<br/>";

	}
	$a = 10;
	echo '$a = '.$a."<br/>";
	$b = $a++;
	echo '$b = $a++;<br/>';
	echo '$a = '.$a.' - $b = '.$b."<br/>";
	$a = 10;
	echo '$a = '.$a."<br/>";
	$b = ++$a;
	echo '$b = ++$a;<br/>';
	echo '$a = '.$a.' - $b = '.$b."<br/>";
	

	echo "<h2>Tableau indicé</h2><br/>";


	$tab = array("lun","mar","merc","jeud","vend","sam");
	echo 'echo du type de tableau $tab: '.var_dump($tab).'<br/>';


	$tab2 = ["lun","mar","merc","jeud","vend","sam"];

	echo 'echo du type de tableau $tab2: '.var_dump($tab2).'<br/>';
	echo 'rajout du dimanche';
	$tab2[]="dimanche";
	echo 'echo du type de tableau $tab2: '.var_dump($tab2).'<br/>';
	echo "<br/> echo count tab:";
	echo count($tab2)."<br/>";

	for($i=0;$i<count($tab2);$i++){
		echo "indice ($i) : $tab2[$i]<br/>";
	}

	echo "<br/>";
	echo "<br/>";
	echo 'echo du type de tableau $tab2 avec dimanche: '.var_dump($tab2).'<br/>';
	echo 'echo du mecredi echo "$tab[2]"<br/>';
	echo $tab[2];
	echo "<br/>";

	echo "<h2>Tableau associatif</h2><br/>";
	$tab3 = [ "lun" => "monday", "mar" => "tuesday", "mer" => "wednesday"];
	echo var_dump($tab3).'<br/>';
	$tab3["jeu"] = "thursday";
	echo var_dump($tab3).'<br/>';

	foreach ($tab3 as $cle=>$elem) {
		echo "($cle) $elem<br/>";
	}

?>
</body>
</html>
