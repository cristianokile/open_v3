<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>partyfinder | OpenLABS</title>
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon//apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon//apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon//apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon//apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon//apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon//apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon//apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon//apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon//android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon//favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon//favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/favicon//ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="assets/css/splash.css">
</head>
<body class="login login-action-login wp-core-ui  locale-pt-br" style="position: relative;">
	<div id="login">
		<h1></h1>

		<form name="pf-form" id="pf-form" action="home.php" method="post">
			<p>
				<label for="user_login">Usuário<br>
					<input type="text" name="pf-user" id="user_login" class="input" value="" size="20"></label>
				</p>
				<p>
					<label for="user_pass">Senha<br>
						<input type="password" name="pf-senha" id="user_pass" class="input" value="" size="20"></label>
					</p>
					<p class="submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Fazer login">
						<input type="hidden" name="redirect_to" value="http://openbalada.com.br/wp-admin/">
						<input type="hidden" name="testcookie" value="1">
					</p>
				</form>

				<p id="nav">
					<a href="#">Perdeu a senha? Se fudeu!</a>
				</p>

				<script type="text/javascript">
					function wp_attempt_focus(){
						setTimeout( function(){ try{
							d = document.getElementById('user_login');
							d.focus();
							d.select();
						} catch(e){}
					}, 200);
					}

					wp_attempt_focus();
					if(typeof wpOnload=='function')wpOnload();
				</script>

			</div>


			<link rel="stylesheet" id="dashicons-css" href="http://openbalada.com.br/wp-includes/css/dashicons.min.css?ver=4.7.2" type="text/css" media="all">
			<div class="footer" style="position: absolute;bottom: 10px; right: 10px">
				<h2 style="font-size: 14px"><small>Versão 2.0</small></h2>
			</div>
		
			<div class="clear"></div>


		</body>
</html>