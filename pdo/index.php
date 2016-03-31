<h1>authentification</h1>
<form action="connexion.php" method="POST">
	<table>
		<tr>
			<td>login</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input  type="submit" value="Zou"></td>			
		</tr>
	</table>

</form>
<?php


$err = filter_input(INPUT_GET, 'err');
if (!empty($err)){
	switch ($err) {
		case '1':
			echo "login ou mot de passe incorrect";
			break;
		case '2':
			echo "Veuillez renseigner un login";
			break;
		case '3':
			echo "Veuillez renseigner un mot de passe";
			break;
		
		default:
			echo "Oups";
			break;
	}
}

?>