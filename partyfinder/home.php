<?php 
$page = "inicio";
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
	                <div class="row">
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#kile">
    									<img class="img" src="assets/img/faces/kile.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h4 class="card-title">Cristiano Kile</h4>
    								<h6 class="category text-gray">CDO / Co-Founder</h6>
    								<p class="card-content">
    									Analista de Sistemas para Internet, Desenvolvedor Front-end, Empreendedor, Entusiasta de Novas Tecnologias e de Marketing Digital.
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
    							</div>
    						</div>
		    			</div>
		    				<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#kile">
    									<img class="img" src="assets/img/faces/douglas-rodolfo.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h4 class="card-title">Douglas Rodolfo</h4>
    								<h6 class="category text-gray">CMO / Co-Founder</h6>
    								<p class="card-content">
    									Especialista em Inbound Marketing, Analista SEO, Empreendedor, Co-Fundador da DekMídia, Vidrado em Redes Sociais, Web Analytics, Marketing Digital e entusiasta de novas tecnologia.</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>
<?php require('footer.php') ?>