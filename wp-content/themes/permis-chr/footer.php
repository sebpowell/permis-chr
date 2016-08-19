
<footer>
	<div class="about">
		<b>Qui sommes nous?</b>
		<p>Permis CHR, centre L.E.O, est un organisme agréé au Permis d'exploitation</br>
		par le Ministère de l'Intérieur N° INTD1610313A</p>
	</div>
	<div class="contact">
		<b>Contactez nous</b>
		<p>Permis CHR, Centre L.E.O, Gandy 24350 Tocane (Périgueux)
		<br> Tel: 0608960057<br>
		Contact@permis-chr.fr</p>
	</div>
	
	<div class="sitemap">
	<b>Plan du site</b>

	<?php


	$defaults = array (
		'container'=> false,
		'theme_location' => 'footer-menu',
		'menu_class' => 'main-menu'
		);

	wp_nav_menu( $defaults);

	?>

<!--

		<ul class="main-menu">
			<li><a href="">Le permis</a></li>
			<li><a href="">Hygiène alimentaire</a></li>
			<li><a href="">Nos plus</a></li>
			<li><a href="">Les dates</a></li>
			<li><a href="">Tarifs</a></li>
			<li><a href="">Financements</a></li>
			<li><a href="">Contact</a></li>
		</ul>
-->
	</div>
</footer>

<?php wp_footer() ; ?>

</body>
</html>
