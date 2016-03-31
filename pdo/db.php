<?php
	function connect(){
		$dns = 'mysql:host=localhost;dbname=stage';
		$user = 'stageuser';
		$pass = 'password';

		try
		{
			$connexion = new PDO($dns,$user,$pass);
			$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connexion;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			exit;
		}
	}

	function bd_login($login,$password){
		try {
			$connexion = connect();
			$req = "SELECT login FROM logins WHERE login=? AND password=?";
			$sth = $connexion->prepare($req);
			$sth->execute([$login,$password]);
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			
			if ($result[login]===$login)
			{
				bd_log($result[login]);
				return true;
			}
			else
			{
				return false;
			}
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			exit;
		}
	}

	function bd_log($login){
		try
		{
			$connexion = connect();
			$var = "Connexion de $login";
			$req = "INSERT INTO logs (msg) VALUES (?)";
			$sth = $connexion->prepare($req);
			$sth->execute([$var]);
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			exit;
		}
	}

	function bd_read_log(){
		try
		{
			$connexion = connect();
			$req = "SELECT date,msg FROM logs";
			$sth = $connexion->prepare($req);
			$sth->execute();
			//$result = $sth->fetch(PDO::FETCH_ASSOC);
			while ($result = $sth->fetch(PDO::FETCH_ASSOC)){
				$res = $res."$result[date] : $result[msg] <br/>";
			}
			return $res;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			exit;
		}
	} 
 



?>