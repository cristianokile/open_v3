<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>CADASTRO DE EVENTOS</title>
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery-mask-plugin.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>	
  <script>
		$(function() {
		    $( "#calendario" ).datepicker();
		});
	</script>
</head>
<body>
	<?php 

		// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
		$titulo = ucwords(strtolower($_POST ['titulo'])); 
		$descricao = $_POST ['descricao'];
		$data = $_POST ['data'];
		$hora = $_POST ['hora'];
		$valor = $_POST ['valor'];
		if (isset($_POST['estilo'])){
		$estilo = $_POST ['estilo'];}
		else{$estilo = "";}
		if (isset($_POST['faixa_etaria'])){
		$faixa_etaria = $_POST ['faixa_etaria'];}
		else{$faixa_etaria = "";}
		$local = $_POST ['local'];
		$endereco = $_POST ['endereco'];
		$cidade = $_POST ['cidade'];
		$telefone = $_POST ['telefone'];
		$whatsapp = $_POST ['whatsapp'];
		$url = $_POST ['url'];
		$social = $_POST ['social'];
		$email = $_POST ['email'];
		if (isset($_POST['destaque'])) {
		$destaque = $_POST ['destaque'];}
		else{$destaque = "";} ?> 

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					$filename = 'evento.xml';
					$conteudo = '<item>
						<title>'. $titulo .' </title>
						<link></link>
						<pubDate></pubDate>
						<dc:creator><![CDATA[]]></dc:creator>
						<guid isPermaLink="false"></guid>
						<description></description>
						<content:encoded><![CDATA['. $descricao .'Descrição do Evento]]></content:encoded>
						<excerpt:encoded><![CDATA[]]></excerpt:encoded>
						<wp:post_id></wp:post_id>
						<wp:post_type>post</wp:post_type>
						<category domain="category" nicename="agenda"><![CDATA[Agenda]]></category>
						<category domain="'. $estilo .'" nicename="'. $estilo .'"><![CDATA[]]></category>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-local]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $local .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-endereco]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $endereco .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-telefone]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $telefone .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-whatsapp]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $whatsapp .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-url]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $url .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-redes]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $social .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-email]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $email .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento_tipo]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $destaque .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-data]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $data .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-horario]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $hora .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-valor]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $valor .']]></wp:meta_value>
						</wp:postmeta>
						<wp:postmeta>
							<wp:meta_key><![CDATA[evento-faixa-etaria]]></wp:meta_key>
							<wp:meta_value><![CDATA['. $faixa_etaria .']]></wp:meta_value>
						</wp:postmeta>
					</item>	';?>

					<?php if (is_writable($filename)) {
					    if (!$handle = fopen($filename, 'a')) { echo "<h1>Não foi possível abrir o arquivo</h1>"; exit;}
					    if (fwrite($handle, $conteudo) === FALSE) { echo "<h1>Não foi possível escrever no arquivo ($filename)</h1>"; exit;}
					    echo '<h1>Sucesso. Evento registrado!</h1><br>
					    <p>Deseja baixar agora o XML?<br>
					    <a class="btn btn-success" href="http://www.openbalada.com.br/cadastrar/evento.xml">BAIXAR AGORA</a></p>
					    <br><hr><br>
					    <p>Cadastrar outro evento?<br>
					    <a class="btn btn-info" href="http://www.openbalada.com.br/cadastrar/">CADASTRAR NOVO!</a></p>';
					    fclose($handle);
					} else { echo "<h1>O evento não pode ser alterado</h1>";}
					?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

</body>
</html>