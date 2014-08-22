<?php 
	
	$gitAula = 'Toda semana';
	$gitHubAula = 'tem aula';
		
	echo $gitAula . ' '. $gitHubAula;

	echo 'Isso é ';
	
	$data = getdate(); 
	
	switch($data['wday']){
		case 0,1,2,3,5:
			$situacao = 'ótimo :)';
			break;
		case 6,7:
			$situacao = 'brincadeira :(';
			break;
	}	
	
	echo $situacao;
?>
