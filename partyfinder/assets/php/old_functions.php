<?php 
// OpenLABS PartyFinder - Desenvolvido por Cristiano Pereira

function pegaEventos($url, $rastreiaLinks, $strutLinks, $strutData, $strutTitle, $strutImgs, $strutContent){
	// Pega link dos eventos
	$page = file_get_html($url);
	$links = array();
	foreach ($page->find($strutLinks) as $link) {
		$links[] = $link->href;	
	};

	//Exibe-os
	$conter = sizeof($links);
	$contadorA = 0;
	if ($rastreiaLinks === true) {
		for ($contadorA = 0; $contadorA < $conter; $contadorA++) { 
			
			$page = file_get_html($links[$contadorA]);
			
			$data = array();
			foreach ($page->find($strutData) as $exibirDatas) {
				$data = $exibirDatas;
			};

			$titulo = array();
			foreach ($page->find($strutTitle) as $exibirLista) {
				$titulo = $exibirLista;
			};

			// Pegar todas as imagens das páginas
			$images = array();
			foreach($page->find($strutImgs) as $img) {
				$images[] = $img->src;
			};
			//Exibe-as
			$thumbnail = array();
			for($contadorB = 0; $contadorB < sizeof($images); $contadorB++){
				$thumbnail[$contadorB] = '<img class="img-thumb" src="'. $images[$contadorB] .'" alt="imagem'. $contadorB .'">';
			};
			$conteudo = array();
			foreach ($page->find($strutContent) as $exibirContent) {
				$conteudo[] =  $exibirContent;
			};
		};	

	} else {

		$titulo = array();
		foreach ($page->find($strutTitle) as $exibirLista) {
			$titulo[] = $exibirLista;
		};

		$data = array();
		foreach ($page->find($strutData) as $exibirDatas) {
			$data = $exibirDatas;
		};

		$images = array();
		foreach($page->find($strutImgs) as $img) {
			 $images[] = $img->src;
		};
		
		$thumbnail = array();
		for($contadorB = 0; $contadorB < sizeof($images); $contadorB++){
			$thumbnail[$contadorB] = '<img class="img-thumb" src="'. $images[$contadorB] .'" alt="imagem'. $contadorB .'">';
		};

		$conteudo = array();
		foreach ($page->find($strutContent) as $exibirContent) {
			$conteudo[] = $exibirContent;
		};
	};
	//return  array('titulo' => $titulo, 'thumbs' => $thumbnail, 'conteudo' => $conteudo);
	return  array('titulo' => $titulo, 'data' => $data, 'thumb' => $thumbnail, 'conteudo' => $conteudo);
} ?>