<?php
session_start();
include_once "db.php";
$login = filter_input(INPUT_POST,'login');
$password = filter_input(INPUT_POST,'password');


/*
$_SESSION['login'] = $login;
$_SESSION['date'] = date('U');
header("Location: accueil.php");
exit;
*/


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
	// Connexion supposée OK, on passe à l'Accueil
	$_SESSION['login'] = $login;
	$_SESSION['date'] = date('U');
	header("Location: accueil.php");
	exit;
}
else
{
	header("Location: index.php?err=1");
	exit;
}

?>