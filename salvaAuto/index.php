<?php
	require_once("partial/header.php");
?>
	
	<div class="container">
		<nav class="navbar">
			<ul><li class="swing"><a href="#home" target="_blank">Salva</a></li></ul>

			<ul>
				<li class="swing"><a href="#exterieur" target="_blank">Exterieur</a></li>
				<li class="swing"><a href="#interieur" target="_blank">Interieur</a></li>
				<li class="swing"><a href="#complet" target="_blank">Complet</a></li>
				<li class="swing"><a href="#maintenance" target="_blank">Maintenance</a></li>
			</ul>

			<ul><li class="swing"><a href="#other">Autres services</a></li></ul>
		</nav>

		<section id="home">
			<div class="logoAuto"></div>
			<div class="dom">Lave Auto à Domicile</div>
			<div class="btn-container" ><button class="btn">Prenez un rendez-vous</button></div>
			<div class="line-load">
				<div class="line"></div>
			</div> 
		</section>

		<section id="exterieur">
			<h1>About</h1>
			<p>Lorem ipsum dolor sit amet.</p>
		</section>

		<section id="interieur">
			<h1>Service</h1>
			<p>Lorem ipsum dolor sit amet.</p>
		</section>

		<section id="complet">
			<h1>Contact</h1>
			<p>Lorem ipsum dolor sit amet.</p>
		</section>

		<section id="maintenance">
			<h1>Maintenance</h1>
			<p>Lorem ipsum dolor sit amet.</p>
		</section>

		<section id="other">
			<h1>Autres Services</h1>
			<p>Lorem ipsum dolor sit amet.</p>
		</section>

	</div>

<?php
	require_once("partial/footer.php");