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
		$(function() {
			$( "#accordion" ).accordion();
		});
	</script>
	<script>
		$.widget( "custom.catcomplete", $.ui.autocomplete, {
			_create: function() {
				this._super();
				this.widget().menu( "local", "endereco", "cidade", "telefone", "whatsapp", "url", "redes-sociais","email", "> :not(.ui-autocomplete-category)" );
			},
			_renderMenu: function( ul, items ) {
				var that = this,
				currentCategory = "";
				$.each( items, function( index, item ) {
					var li;
					if ( item.category != currentCategory ) {
						ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
						currentCategory = item.category;
					}
					li = that._renderItemData( ul, item );
					if ( item.category ) {
						li.attr( "aria-label", item.category + " : " + item.label );
					}
				});
			}
		});
	</script>
	<script>
		$(function() {
			var data = [
			{ label: "anders", category: "" },
			{ label: "andreas", category: "" },
			{ label: "antal", category: "" },
			{ label: "annhhx10", category: "Products" },
			{ label: "annk K12", category: "Products" },
			{ label: "annttop C13", category: "Products" },
			{ label: "anders andersson", category: "People" },
			{ label: "andreas andersson", category: "People" },
			{ label: "andreas johnson", category: "People" }
			];

			$( "#search" ).catcomplete({
				delay: 0,
				source: data
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin-top-bottom-20">
				<div class="row">
					<div class="col-md-2">
						<img src="http://openbalada.com.br/wp-content/themes/openbalada_v2/img/openbalada-logo.png" alt="OpenBalada - Logotipo" height="100px" class="img-responsive margin-auto">
					</div>
					<div class="col-md-10">
						<h1 class="text-center bold color-red">CADASTRO DE EVENTOS</h1>
					</div>
				</div>
			</div>
			<br>
			<div class="col-md-12">
				<form action="cadastrar.php" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Titulo</label>
						<input type="text" class="form-control uppercase" name="titulo" placeholder="Digite o titulo do Evento">
					</div>
					<div class="form-group">
						<label for="exampleLabel">Descrição</label>
						<textarea class="form-control" rows="3" name="descricao" placeholder="Digite a descrição do Evento"></textarea>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Data do Evento</label>
							<input type="text" name="data" class="form-control" id="calendario" placeholder="Selecione a Data">
						</div>
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Horário</label>
							<input type="text" name="hora" class="form-control time" id="horario" placeholder="Digite o Horário">
						</div>
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Valor</label>
							<input type="text" name="valor" class="form-control" placeholder="Digite o valor (Ex. De R$ 10 a R$ 20)">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Estilo</label>
						<br>
						<div class="checkbox col-md-3">
							<label class="radio-inline"><input type="radio" name="estilo" value="alternativo">Alternativo</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="axe">Axé</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="brega">Brega</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="classica">Clássica</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="disco-music">Disco Music</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="eletronica">Eletrônica</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="flashback">FlashBack</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="forró">Forró</label><br>
						</div>
						<div class="checkbox col-md-3">						
							<label class="radio-inline"><input type="radio" name="estilo" value="funk">Funk</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="funknejo">Funknejo</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="gospel">Gospel</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="hip-hop">Hip Hop</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="indie-rock">Indie Rock</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="infantil">Infantil</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="jazz">Jazz</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="marchinhas">Marchinhas</label><br>
						</div>
						<div class="checkbox col-md-3">		
							<label class="radio-inline"><input type="radio" name="estilo" value="mpb">MPB</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="musical">Musical</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="pagode">Pagode</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="pop">Pop</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="pop-rock">Pop/Rock</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="rock">Rock</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="samba">Samba</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="sertanejo-country">Sertanejo / Country</label><br>
						</div>
						<div class="checkbox col-md-3">						
							<label class="radio-inline"><input type="radio" name="estilo" value="sertanejo-universitário">Sertanejo Universitário</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="soul">Soul</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="teatro">Teatro</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="reggae">Reggae</label><br>
							<label class="radio-inline"><input type="radio" name="estilo" value="retro">Retro</label><br>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<label>Faixa Etária</label>
						<div class="checkbox col-md-12">
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio1" value="Livre"> Livre
							</label>
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio2" value="+ 10 anos"> + 10 anos
							</label>
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio3" value="+ 12 anos"> + 12 anos
							</label>
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio3" value="+ 14 anos"> + 14 anos
							</label>
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio3" value="+ 16 anos"> + 16 anos
							</label>
							<label class="radio-inline">
								<input type="radio" name="faixa_etaria" id="inlineRadio3" value="+ 18 anos"> + 18 anos
							</label>
						</div>
					</div>
					<br>
					<div class="clearfix"></div>
					<div class="form-group">
						<label for="exampleInputEmail1">Local</label>
						<input type="text" class="form-control" name="local" placeholder="Digite o local do Evento (Casa de Show)">
						<br>
						<input id="search" class="form-control">
					</div>

					<div id="accordion">
						<h3>Local</h3>
						<div>
							<div class="form-group">
								<label for="exampleInputEmail1">Local</label>
								<input id="search" class="form-control" name="local" placeholder="Digite o local do Evento (Casa de Show)">
							</div>
						</div>
						<h3>[+] Cadastrar um novo local</h3>
						<div>
							<div class="form-group">
								<label for="exampleInputEmail1">Local</label>
								<input type="text" class="form-control" name="local" placeholder="Digite o local do Evento (Casa de Show)">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Endereço</label>
								<input type="text" class="form-control" name="endereco" placeholder="Digite o endereço do Evento">
							</div>
							<label for="exampleInputEmail1">Cidade</label>
							<select class="form-control" name="cidade">					
								<option>Aparecida / SP</option>
								<option>Barretos / SP</option>
								<option>Belo Horizonte / MG</option>
								<option>Bragança Paulista / SP</option>
								<option>Brazópolis / MG</option>
								<option>Caçapava / SP</option>
								<option>Cachoeira Paulista / SP</option>
								<option>Campinas / SP</option>
								<option>Campos do Jordão / SP</option>
								<option>Caraguatatuba / SP</option>
								<option>Cruzeiro / SP</option>
								<option>Guaratinguetá / SP</option>
								<option>Ilhabela / SP</option>
								<option>Itajuba / MG</option>
								<option>Jacareí / SP</option>
								<option>Lorena / SP</option>
								<option>Mogi das Cruzes / SP</option>
								<option>Monteiro Lobato / SP</option>
								<option>Paraibuna / SP</option>
								<option>Pindamonhangaba / SP</option>
								<option>Piracicaba / SP</option>
								<option>Rio de Janeiro / RJ</option>
								<option>Santa Bárbara / MG</option>
								<option>São Luiz do Paraitinga / SP</option>
								<option>São Paulo / SP</option>
								<option>São Sebastião / SP</option>
								<option>Sorocaba / SP</option>
								<option>Sumaré / SP</option>
								<option>Taubaté / SP</option>
								<option>Tremembé / SP</option>
								<option>Ubatuba / SP</option>
							</select>
							<div class="form-group col-md-6">
								<br>
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" class="form-control phone_with_ddd" name="telefone" placeholder="Digite o Telefone do Local">
							</div>
							<div class="form-group col-md-6">
								<br>
								<label for="exampleInputEmail1">Whatsapp</label>
								<input type="text" class="form-control sp_celphones" name="whatsapp" placeholder="Digite o whatsapp do Local">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputEmail1">URL Site</label>
								<input type="url" class="form-control" name="url" placeholder="Digite o site do evento">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputEmail1">Perfil / Redes Sociais</label>
								<input type="url" class="form-control" name="social" placeholder="Digite o endereço das redes sociais">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputEmail1">E-mail</label>
								<input type="email" class="form-control" name="email" placeholder="Digite o e-mail">
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="exampleInputFile">Destaque</label>
							<div class="row">
								<div class="checkbox col-md-12">
									<label class="radio-inline">
										<input type="radio" name="destaque" id="inlineRadio1" value="Principal"> Principal
									</label>
									<label class="radio-inline">
										<input type="radio" name="destaque" id="inlineRadio2" value="Secundario"> Secundário
									</label>
									<label class="radio-inline">
										<input type="radio" name="destaque" id="inlineRadio3" value="Comum"> Comum
									</label>
								</div>
							</div>
						</div>
					</div>  
				</div>
				
			<!-- <div class="form-group col-md-12">
				<label for="exampleInputFile">Arte</label>
				<input type="file" id="exampleInputFile" class="btn">
			</div> -->
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-danger col-md-12">SALVAR</button>
			</div>
		</form>
		<br>
	</div><!-- /col-md-12 -->
</div><!-- /row -->
</div><!-- /container -->
<footer>
	<script type="text/javascript">
		$(function() {
			$('.date').mask('00/00/0000');
			$('.time').mask('00h00');
			$('.date_time').mask('00/00/0000 00:00:00');
			$('.cep').mask('00000-000');
			$('.phone').mask('0000-0000');
			$('.phone_with_ddd').mask('(00) 0000-0000');
			$('.phone_us').mask('(000) 000-0000');
			$('.mixed').mask('AAA 000-S0S');
			$('.ip_address').mask('099.099.099.099');
			$('.percent').mask('##0,00%', {reverse: true});
			$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
			$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
			$('.fallback').mask("00r00r0000", {
				translation: {
					'r': {
						pattern: /[\/]/, 
						fallback: '/'
					}, 
					placeholder: "__/__/____"
				}
			});

			$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

			$('.cep_with_callback').mask('00000-000', {onComplete: function(cep) {
				console.log('Mask is done!:', cep);
			},
			onKeyPress: function(cep, event, currentField, options){
				console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
			},
			onInvalid: function(val, e, field, invalid, options){
				var error = invalid[0];
				console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
			}
		});

			$('.crazy_cep').mask('00000-000', {onKeyPress: function(cep, e, field, options){
				var masks = ['00000-000', '0-00-00-00'];
				mask = (cep.length>7) ? masks[1] : masks[0];
				$('.crazy_cep').mask(mask, options);
			}});

			$('.cpf').mask('000.000.000-00', {reverse: true});
			$('.money').mask('#.##0,00', {reverse: true});

			var SPMaskBehavior = function (val) {
				return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},
			spOptions = {
				onKeyPress: function(val, e, field, options) {
					field.mask(SPMaskBehavior.apply({}, arguments), options);
				}
			};

			$('.sp_celphones').mask(SPMaskBehavior, spOptions);

			$(".bt-mask-it").click(function(){
				$(".mask-on-div").mask("000.000.000-00");
				$(".mask-on-div").fadeOut(500).fadeIn(500)
			})

			$('pre').each(function(i, e) {hljs.highlightBlock(e)});
		});
	</script>
</footer>	
</body>
</html>