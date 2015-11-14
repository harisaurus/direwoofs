<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href='https://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,300italic' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="underConstruction">
	We're going through an overhaul to please you better!
</div>

<style>
	.underConstruction{
		position: fixed;
		right: 0;
		top: 115px;
		width: 250px;
		background: tomato;
		z-index: 3;
		padding: 20px;
		color: white;
		box-shadow: 0 0 15px #888;
	}
</style>

<header>
  <div class="container">
		<div class="grid grid--middle">
			<div class="grid__item one-third">
		    <h1 class="navTitle">
		      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
		        <?php bloginfo( 'name' ); ?>
		      </a>
		    </h1>
			</div>
			<div class="grid__item two-thirds">
		    <div class="u-alignRight">
					<?php wp_nav_menu( array(
			      'container' => false,
			      'theme_location' => 'primary'
			    )); ?>
				</div>
			</div>
		</div>

  </div> <!-- /.container -->
</header><!--/.header-->
