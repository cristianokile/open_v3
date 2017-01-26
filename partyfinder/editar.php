<?php 
$page = "cadastrar";
require('header.php') ?>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-1.jpg">
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
	            	<form>
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="card">
		                            <div class="card-header" data-background-color="orange">
		                                <h4 class="title">Cadastro do Estabelecimento</h4>
										<p class="category">Cadastre as informações da Casa</p>
		                            </div>
		                            <div class="card-content">
		                                    <div class="row">
		                                        <div class="col-md-12">
													<div class="form-group label-floating">
														<label class="control-label">Casa de Eventos</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-10">
													<div class="form-group label-floating">
														<label class="control-label">Endereço</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-2">
													<div class="form-group label-floating">
														<label class="control-label">Nº</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-5">
													<div class="form-group label-floating">
														<label class="control-label">Bairro</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-5">
													<div class="form-group label-floating">
														<label class="control-label">Cidade</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-2">
													<div class="form-group label-floating">
														<label class="control-label">Estado</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Telefone 1</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Telefone 2</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-4">
													<div class="form-group label-floating">
														<label class="control-label">Telefone 3</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">E-mail</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Responsavel</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-12">
													<div class="form-group label-floating">
														<label class="control-label">Website (A versão que aparecerá para os visitantes)</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
			                                </div>
		                                     <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Facebook</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Instagram</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Twitter</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                        <div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Outra Rede Social</label>
														<input type="text" class="form-control">
													</div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-md-12">
		                                            <div class="form-group">
		                                                <label><strong>Informações Complementares</strong></label>
														<div class="form-group label-floating">
										    				<label class="control-label"> Adicione informações complementares (opcional)</label>
									    					<textarea class="form-control" rows="5"></textarea>
			                        					</div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <a id="partyfinder" class="btn btn-primary pull-left">Dados para o PartyFinder</a>
		                                    <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
	                                    	<div class="clearfix"></div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="col-md-12">
		                        <div id="card-pf" class="card" style="display: none;">
		                            <div class="card-header" data-background-color="orange">
		                                <h4 class="title">Informações para o Partyfinder </h4>
										<p class="category">Cadastre as informações do website que o sistema realizará a busca</p>
		                            </div>
		                            <div class="card-content">
		                             	<div class="row">
	                                        <div class="col-md-12">
		                                            <div class="form-group">
		                                                <label><strong>Digite o endereço completo da página de Agenda</strong></label>
														<div class="form-group label-floating">
															<label class="control-label">URL</label>
															<input type="text" class="form-control">
			                        					</div>
		                                            </div>
	                                        </div>
		                                </div>
		                                 <div class="row">
		                                        <div class="col-md-3">
		                                            <div class="form-group">
		                                                <label><strong>Buscar Links Internos?</strong></label>
														<div class="form-group label-floating">
															<select class="form-control">
																<option>Não</option>
																<option>Sim</option>
															</select>
			                        					</div>
		                                            </div>
		                                        </div>
		                                 </div>
		                                 <div class="row">
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label><strong>DOM contendo Link</strong></label>
														<div class="form-group label-floating">
															<input type="text" class="form-control">
			                        					</div>
		                                            </div>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label><strong>DOM contendo Titulo</strong></label>
														<div class="form-group label-floating">
															<input type="text" class="form-control">
			                        					</div>
		                                            </div>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label><strong>DOM contendo Imagem</strong></label>
														<div class="form-group label-floating">
															<input type="text" class="form-control">
			                        					</div>
		                                            </div>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label><strong>DOM contendo Info</strong></label>
														<div class="form-group label-floating">
															<input type="text" class="form-control">
			                        					</div>
		                                            </div>
		                                        </div>
		                                       
		                                    </div>
	                                    	<button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
	                                    	<div class="clearfix"></div>
		                            </div>
		                        </div>
		                    </div>						
		                </div>
		             </form>
	            </div>
	        </div>
<?php require('footer.php') ?>