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
	$url = "http://www.lloydsturismo.com.br/index.php?route=product/category&path=81";
	$rastreiaLinks = true;
	$strutLinks = 'ul.org_cat li div ul li a';
	$strutTitle = "label";
	$strutImgs = '.category-info img';
	$strutContent = 'div#tab-description';

	// DUNLUCE IRISH PUB
	// $url = "http://www.dunlucepub.com.br/agenda";
	// $rastreiaLinks = false;
	// $strutLinks = 'div.centro-980 div';
	// $strutData = '';
	// $strutTitle = "h3";
	// $strutImgs = 'a.sync img';
	// $strutContent = 'div.m-text-center';

	// ESTANCIA NATIVA SERTANEJA
	// $url = "http://estancianativasertaneja.com.br/programacao";
	// $rastreiaLinks = true;
	// $strutLinks = 'div.post-content h2 a';
	// $strutData = '';
	// $strutTitle = "header.page-header h1;
	// $strutImgs = 'div.post-image a img';
	// $strutContent = 'div.post-meta-table';

	// GUTEN BIER
	// $url = "http://gutenbier.com.br/agenda-balada.php";
	// $rastreiaLinks = false;
	// $strutLinks = 'div.post-content h2 a';
	// $strutData = '';
	// $strutTitle = "header.page-header h1;
	// $strutImgs = 'div.post-image a img';
	// $strutContent = 'div.post-meta-table';

	$evento = array();
	$evento = pegaEventos($url, $rastreiaLinks, $strutLinks, $strutData, $strutTitle, $strutImgs, $strutContent);

	$titulo = ($evento['titulo']);
	print_r($titulo[1]);

	// $imagem = ($evento['thumbs']);
	// echo $imagem[2];
	 
?>	
</body>
</html>

