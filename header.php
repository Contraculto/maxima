<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="author" content="Rodrigo Lanas">
	<meta name="description" content="Sitio de prueba">
	<meta name="keywords" content="wordpress, blog, sitio, prueba, internet, themes">

	<title><?php bloginfo('name'); wp_title('-'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> rss feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body class="sans">
	<div id="wrapper">

		<div id="header">

			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h3><?php bloginfo('description'); ?></h3>
			
			<div id="navigation">
				<?php if ( has_nav_menu('header') ) {
					$header_menu_args = array(
						'theme_location' => 'header',
						'container'      => false
					);
					wp_nav_menu( $header_menu_args );

				} else { ?>

				<ul>
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>

			<?php } ?>
			</div>

		</div>
