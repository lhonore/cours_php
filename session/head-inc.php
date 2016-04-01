<?php
	session_start();
	if (isset($_SESSION['login']))
	{
		$login = $_SESSION['login'];
	}
	else
	{
		header('Location: index.php?err=4');
		exit;
	}
	require "timeout-inc.php";
	require "config-inc.php";

?>

<html>
	<head>
		<link href="/session/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
    	<link href="/session/bootstrap/docs/examples/starter-template/starter-template.css" rel="stylesheet">
		<title><?php echo $title; ?></title>

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="accueil.php"><?php echo $title; ?></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li class="active"><a href="accueil.php">Accueil</a></li>
			    <li><a href="info.php">Info</a></li>
			    <li><a href="log.php">Log</a></li>
			    <li><a href="deconnexion.php">Deconnexion</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
			</div>
    	</nav>
    	<div class="container">
			<div class="starter-template">


