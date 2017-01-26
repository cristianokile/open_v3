<?php 
// OpenLABS PartyFinder - Desenvolvido por Cristiano Pereira

function pegaEventos($url, $rastreiaLinks, $strutLinks, $strutData, $strutTitle, $strutImgs, $strutContent){

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "http://www.lloydsturismo.com.br/index.php?route=product/category&path=81");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FILETIME, true);
	$output = curl_exec($ch);// acessar URL
	$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);// Pegar o código de resposta

	if ($response_code == '404') {
		echo 'Página não existente';
	} else {
		$dom = new DOMDocument;
		$dom->loadHTML($output);
		 
		$class = 'tab-description';		 
		$procura = new DomXPath($dom);		 
		$div = $procura->query("//*[contains(@class, '$class')]");		 
		var_dump($div->item(0)->nodeValue);
	}//end else

};