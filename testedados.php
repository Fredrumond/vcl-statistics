<?php

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://globo.com/');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	#$resultado = curl_exec($ch);
	#preg_match('/<h2>(.*?)<\/h2>/i',$resultado,$titulo);


	$output = curl_exec ( $ch ) ;
	$httpCode = curl_getinfo ( $ch , CURLINFO_HTTP_CODE ) ;
	
	if ( $httpCode !== 404 ) {
		
		libxml_use_internal_errors ( true ) ;
		$dom = new DOMDocument ( ) ;
		
		
		$dom->preserveWhiteSpace = false ;
		$dom->loadHTML ( $output ) ;
		
		foreach ( $dom->getElementsByTagName ( 'h2' ) as $node ) {
			$nodes [ ] = utf8_decode ( $node->nodeValue ) ; 
		}
		
		echo '<pre>';
			var_dump ( $nodes ) ;
		echo '</pre>';	
		
	}



	

	#var_dump($titulo);
	#echo $titulo[1];
	curl_close($ch);

?>