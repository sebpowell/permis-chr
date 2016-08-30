<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="google-site-verification" content="KQ9JyJNcgg_PDCOnQ8ElZcd87BE4j8bjUTKxUx4hcTY" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77027207-1', 'auto');
  ga('send', 'pageview');

</script>

<title><?php wp_title(); ?>PERMIS CHR centre agréé Permis d'Exploitation Dordogne et Gironde</title>
  <meta name="description" content="PERMIS CHR délivre votre Permis d'Exploitation valable 10 ans. Formatrice juridique et professionnelle CHR agréée. Soyez prêt pour démarrer!" />
  <meta charset="utf-8">
  <script src="https://use.typekit.net/mhg4tzw.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
 <!--  <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<?php wp_head(); ?>

	<script>
		$(document).ready(function() {
			$(".menu-item-has-children > a").click(function(e) {
				e.preventDefault();
				$(this).next(".sub-menu").toggleClass("is-open");
			});

			$(".sub-menu").click(function(e) {
				e.stopPropagation();
			});

			$(".mobile-navigation-toggle").click(function(e) {
				e.stopPropagation();
				$(".navigation-container").addClass("is-open");
			});
			$("body").click(function() {
				if ( $(".navigation-container").hasClass("is-open") ) {
					$(".navigation-container").removeClass("is-open");
				}
				else {

				}

				$(".sub-menu").removeClass("is-open");
			});
			$(".navigation-container").click(function(e) {
				e.stopPropagation();
			});
		});
	</script>

</head>
<body>

<header>
	<a class="logo" href="/"></a>
	<div class="mobile-navigation-toggle">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="navigation-container">



	<?php


	$defaults = array (
		'container'=> false,
		'theme_location' => 'primary-menu',
		'menu_class' => 'main-menu'
		);

	wp_nav_menu( $defaults);

	?>

	</nav>
</header>
