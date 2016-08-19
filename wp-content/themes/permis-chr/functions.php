<?php add_theme_support( 'menus' ); 

function register_theme_menus() {
	register_nav_menus(
		array (
			'primary-menu' => __('Primary Menu'),
			'footer-menu' => __('Footer Menu'),
			)
	);
	}

add_action ('init', 'register_theme_menus')

?>
<?php 
function permis_init() {
	$args = array(
	  'label' => 'Permis - Dates',
		'public' => true,
		'capability_type' => 'post',
		);
	register_post_type( 'permis', $args );
}
add_action( 'init', 'Permis_init' );
?>
<?php 
function autre_init() {
	$args = array(
	  'label' => 'Pack - Dates',
		'public' => true,
		'capability_type' => 'post',
		);
	register_post_type( 'autre', $args );
}
add_action( 'init', 'autre_init' );
?>
<?php 
function expert_init() {
	$args = array(
	  'label' => 'Expert - Dates',
		'public' => true,
		'capability_type' => 'post',
		);
	register_post_type( 'expert', $args );
}
add_action( 'init', 'expert_init' );
?>