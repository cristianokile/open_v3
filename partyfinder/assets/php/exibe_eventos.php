<?php // Chama a função e passa valores
	$evento = array();
	$evento = pegaEventos($url, $rastreiaLinks, $strutLinks, $strutData, $strutTitle, $strutImgs, $strutContent);

	// Recebe valores da Função
	$titulo = ($evento['titulo']);
	$data = ($evento['data']);
	$thumb = ($evento['thumb']);
	$conteudo = ($evento['conteudo']);

	//Cria a lista de exibição
	for ($i=0; $i < sizeof($titulo); $i++) { 
		if (!empty($titulo)) { echo "<h2>" . ($titulo[$i])."</h2>";};
		if (!empty($data)) { echo "<h3>" . ($data[$i])."</h3>";};
		if (!empty($conteudo)) { echo "<p>" . ($conteudo[$i])."</p>";};
		if (!empty($thumb)) { echo "<br>" . ($thumb[$i]);};
		echo "<hr>";		
	};
?>