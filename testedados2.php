<?php

//Criando a url para o aquivo json
    $jsonurl ="https://api.cartolafc.globo.com/time/breakpause-f-c";

    //Retorna o conteudo do arquivo em formato de string
    $json = file_get_contents($jsonurl,0,null,null);


    //Decodificando a string e criando o json
    $json_output = json_decode($json, true);


    $json_output = json_decode($json, true);
	echo '<pre>';
	print_r( $json_output);

	#$array = $json_output['time'];

	/*foreach ($json_output['time'] as $key => $value) {
	echo $value['nome_cartola'].'<br/>';
	var_dump($value);nome_cartola
	
}*/

	var_dump($array);

	

?>