<?php 
	
	$gitAula = 'Toda semana';
	$gitHubAula = 'tem aula';
		
	$string = $gitAula . ' '. $gitHubAula;

	/* pulando linha */
	$string .= '<br />';
	
	$string .= 'Isso é ';
	
	$data = getdate(); 
	
	switch($data['wday']){
		case 0:
		case 1:
		case 2:
		case 3:
		case 5:
			$situacao = 'ótimo :)';
			break;
		case 6:
		case 7:
			$situacao = 'brincadeira :(';
			break;
	}	
	
	$string .= $situacao;

	/* pulando linha */
	$string .= '<br />';
	
	$string .= 'Fim';	
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Página Aula Git GitHub</title>
	<meta charset="utf-8">
	</head>
	<body>
	<h1><?php echo $string ?></h1>
	</body>
</html>
