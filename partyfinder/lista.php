<?php 
$page = "lista";
require('header.php'); 
include('assets/config/config.php');
?>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag

			-->
			
	    	<?php include('sidebar.php') ?>
		</div>

	    <div class="main-panel">
			<?php include('nav.php') ?>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Casas de Eventos</h4>
	                                <p class="category">Casas de eventos cadastradas no sistema</p>
	                            </div>
	                            <div class="card-content table-responsive">
									<table class="table">
	                                    <thead class="text-primary">
	                                    	<th></th>
	                                    	<th>Casa de Show</th>
	                                    	<th>Cidade</th>
	                                    	<th>Site</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Excluir</th>
											<th class="text-center">Gerar</th>
	                                    </thead>
										<tbody>
											<?php $results = $mysqli->query("SELECT * FROM estabelecimentos ORDER BY id"); ?>
											<?php $list = "";?>
											<?php while($row = $results->fetch_assoc()) { 
												$list .= <<<EOT
													<tr>
				                                    	<td>{$row['id']}</td>
				                                    	<td>{$row['estabelecimento']}</td>
				                                    	<td>{$row['cidade']}</td>
				                                    	<td>{$row['website']}</td>
														<td class="text-center">
															<a class="" href="editar.php">
																<i class="material-icons">mode_edit</i>
															</a>
														</td>
														<td class="text-center">
															<a class="" href="#">
																<i class="material-icons">delete</i>
															</a>
														</td>
														<td class="text-center">
															<a class="" href="#">
																<i class="material-icons">get_app</i>
															</a>
														</td>
				                                    </tr>
EOT;
	}
	echo $list;
?>							
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	      <?php require('footer.php') ?>