
<html>
	<head>
		<meta charset="UTF-8">
		<title>initiation poo</title>
	</head>
	<body>
		<h1>initiation poo</h1>
		<?php 
			include "personne-inc.php";

			try {
				$bob = new Personne;
				$bob->prenom = 'bob';
				$bob->nom = 'L\'éponge';
				$bob->setdate('2010-04-30');

				$cur = new Personne;
				$cur->prenom = 'cur';
				$cur->nom = 'zen';
				$cur->setdate('1999-03-01');

				$pro = new Personne('pro','pro');
				$pro->setdate('2010-03-19');

				$xc = new Personne('xc','xc','2010-03-20');
				$xc->setdate('2010-12-20');

			} catch (Exception $e){
				echo $e->getMessages();
				exit;
			}


			####### BOB
			echo var_dump($bob);
			echo '<br/>';
			echo "Prénom : $bob->prenom <br/>";
			echo "Date :".$bob->getDate()."<br/>";
			echo "Age :".$bob->getAge()."<br/><br/>";

			####### CUR
			echo var_dump($cur);
			echo '<br/>';
			echo "Prénom : $cur->prenom <br/>";
			echo "Date :".$cur->getDate()."<br/>";
			echo "Age :".$cur->getAge()."<br/><br/>";

			####### PRO
			echo var_dump($pro);
			echo '<br/>';
			echo "Prénom : $pro->prenom <br/>";
			echo "Date :".$pro->getDate()."<br/>";
			echo "Age :".$pro->getAge()."<br/><br/>";

			####### XC
			echo var_dump($xc);
			echo '<br/>';
			echo "Prénom : $xc->prenom <br/>";
			echo "Date :".$xc->getDate()."<br/>";
			echo "Age :".$xc->getAge()."<br/><br/>";


		?>
	</body>
</html>


