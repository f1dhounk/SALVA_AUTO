<?php
	require_once("partial/header.php");
?>
	
	<div class="container">
		<nav class="navbar">
			<ul><li><a href="#home">Salva</a></li></ul>

			<ul>
				<li><a href="#exterieur">Exterieur</a></li>
				<li><a href="#interieur">Interieur</a></li>
				<li><a href="#complet">Complet</a></li>
				<li><a href="#maintenance">Maintenance</a></li>
			</ul>

			<ul><li><a href="#other">Autres services</a></li></ul>
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