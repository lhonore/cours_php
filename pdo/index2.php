
<html>
	<head>
		<meta charset="UTF-8">
		<title>initiation pdo</title>
	</head>
	<body>
		<h1>initiation pdo</h1>
		<?php 
			$dns = 'mysql:host=localhost;dbname=stage';
			$user = 'stageuser';
			$pass = 'password';

			try {
				$connexion = new PDO($dns,$user,$pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$req = "SELECT login FROM logins WHERE login=? AND password=?";
				$sth = $connexion->prepare($req);
				$sth->execute(['bob','azerty']);
				$result = $sth->fetch();
				echo var_dump($result);
				echo "<br/>";
				echo "login : $result[0]";
				echo "<br/>";
				echo "login : $result[login]";
				echo "<br/>";

			} catch (PDOException $e) {
				echo $e->getMessage();
				exit;
			}


		?>
	</body>
</html>


