<?php

function verificaSenha($senhas){

	foreach($senhas as $key => $value) {

		preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@#!]{7,}/', $value , $matches);

		if(!empty($matches[0])){
			$dados[] = $matches[0];
		}
	}

	return $dados;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desafio Athletic-gear</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h3>Leonardo Ferrari</h3>
		<h1>Desafio Athletic-gear</h1>
	</header>
	<div class="exemplo">
		<h1>Considerando o seguinte Array :</h1>
		<?php
		$senhas = array('#forTe1','senhafraca','Qu@s1', 'Voce@consegue!2023');
		echo '<pre>' ; print_r($senhas); echo '</pre>' ;
		?>

		<h1>Senhas fortes :</h1>
		<?php

		$item = verificaSenha($senhas);
		foreach($item as $senha){

			echo '<pre>' ; echo($senha); echo '</pre>' ;
		}

		?>

	</div>

</body>
</html>