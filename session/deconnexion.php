<?php

function stop_session()
	{	
		session_destroy();
		header('Location: index.php?err=5');
		exit;
	}
stop_session();
?>