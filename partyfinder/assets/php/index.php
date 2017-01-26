<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>OpenLABS PartyFinder | Versão 0.1</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php 
	include("simple_html_dom.php");
	include("functions.php");

	// QUERO INGRESSOS
	// $url = "http://www.lloydsturismo.com.br/index.php?route=product/category&path=81";
	// $rastreiaLinks = true;
	// $strutLinks = 'ul.org_cat li div ul li a';
	// $strutTitle = "label";
	// $strutImgs = '.category-info img';
	// $strutContent = 'div#tab-description';
	// $endereco = "";
	// $telefone = "";
	// $social_1 = "";
	// $social_2 = "";
	// $social_3 = "";

	// DUNLUCE IRISH PUB
	// $url = "http://www.dunlucepub.com.br/agenda";
	// $rastreiaLinks = false;
	// $strutLinks = 'div.centro-980 div';
	// $strutData = 'h3.marrom';
	// $strutTitle = 'h3.margin-top-15';
	// $strutImgs = 'a.sync img';
	// $strutContent = 'div.m-text-center';
	// $endereco = "Praça Cândida Maria César Sawaya Giana 4, Jardim Apolo I, São José dos Campos - SP";
	// $telefone = "(12) 3921-0565 / 98272-2299";
	// $social_1 = "https://www.facebook.com/pages/Dunluce-Irish-Pub/100358503385372";
	// $social_2 = "https://twitter.com/dunluce_pub";
	// $social_3 = "http://instagram.com/dunluce_pub";


	// ESTANCIA NATIVA SERTANEJA
	$url = "http://estancianativasertaneja.com.br/programacao";
	$rastreiaLinks = true;
	$strutLinks = 'div.post-content h2 a';
	$strutData = '';
	$strutTitle = "header.page-header h1";
	$strutImgs = 'div.post-image a img';
	$strutContent = 'div.post-meta-table';
	$endereco = "";
	$telefone = "";
	$social_1 = "";
	$social_2 = "";
	$social_3 = "";

	// GUTEN BIER
	// $url = "http://gutenbier.com.br/agenda-balada.php";
	// $rastreiaLinks = false;
	// $strutLinks = 'div.post-content h2 a';
	// $strutData = '';
	// $strutTitle = "header.page-header h1";
	// $strutImgs = 'div.post-image a img';
	// $strutContent = 'div.post-meta-table';
	// $endereco = "";
	// $telefone = "";
	// $social_1 = "";
	// $social_2 = "";
	// $social_3 = "";

	$evento = array();
	$evento = pegaEventos($url, $rastreiaLinks, $strutLinks, $strutData, $strutTitle, $strutImgs, $strutContent);

	$titulo = ($evento['titulo']);
	$data = ($evento['data']);
	$conteudo = ($evento['conteudo']);
	$thumb = ($evento['thumb']);
	
	for ($i=0; $i < sizeof($evento['titulo']); $i++) { 
		if (isset($titulo))   { echo "<h1>" . $titulo[$i] . "</h1>";};
		if (isset($data))     { echo "<h2>". strip_tags($data[$i]) ."</h2>";   };
		if (isset($conteudo)) { echo "<p>". strip_tags($conteudo[$i]) ."</p>"; };
		if (isset($thumb))    { echo $thumb[$i]; };		
		if (isset($endereco)) { echo "<p><strong>Endereço: </strong>" . $endereco . "</p>"; };
		if (isset($telefone)) { echo "<p><strong>Telefone: </strong>" . $telefone . "</p>"; };
		if (isset($social_1)) { echo "<p><strong>Social 1: </strong>" . $social_1 . "</p>"; };
		if (isset($social_2)) { echo "<p><strong>Social 2: </strong>" . $social_2 . "</p>"; };
		if (isset($social_3)) { echo "<p><strong>Social 3: </strong>" . $social_3 . "</p>"; };
		echo "<hr>";
	};
?>	
<style>

</style>
</body>
</html>
