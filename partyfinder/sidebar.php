<div class="logo">
    <a href="home.php" class="simple-text">
        <img clas='img-responsive' src="assets/img/partyfinder-logo.png" alt="partyfinder" style="max-width: 225px;">
    </a>
</div>

<div class="sidebar-wrapper">
	<ul class="nav">
		<li <?php if ($page == 'inicio'){echo 'class="active"';}?>>
			<a href="home.php">
				<i class="material-icons">dashboard</i>
				<p>Inicio</p>
			</a>
		</li>
		<li <?php if ($page == 'cadastrar'){echo 'class="active"';}?> >
			<a href="cadastrar.php">
				<i class="material-icons">person</i>
				<p>Cadastro de Casas</p>
			</a>
		</li>
		<li <?php if ($page == 'lista'){echo 'class="active"';}?>>
			<a href="lista.php">
				<i class="material-icons">content_paste</i>
				<p>Lista de Casas</p>
			</a>
		</li>
       <!--  <li>
            <a href="typography.htm">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
            </a>
        </li>
        <li>
            <a href="icons.htm">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
            </a>
        </li>
        <li>
            <a href="maps.htm">
                <i class="material-icons">location_on</i>
                <p>Maps</p>
            </a>
        </li>
        <li>
            <a href="notifications.htm">
                <i class="material-icons text-gray">notifications</i>
                <p>Notifications</p>
            </a>
        </li>
		<li class="active-pro">
            <a href="upgrade.htm">
                <i class="material-icons">unarchive</i>
                <p>Upgrade to PRO</p>
            </a>
        </li> -->
    </ul>
</div>