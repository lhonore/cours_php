<?php


$timeout = 1800;

if (isset($_SESSION['date']))
{
	if (date('U') - $_SESSION['date'] > $timeout)
	{
		header('Location: index.php?err=6');
		exit;
	}
}
else
{
	header('Location: index.php?err=4');
	exit;
}
?>