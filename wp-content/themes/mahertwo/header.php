<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<title><?php bloginfo("name"); ?> | <?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="container">
		<div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><h2><?php bloginfo("title"); ?></h2></a></div>

		<!-- <nav class="main-menu"> -->			
			<?php
				$args = array(
						'theme_location'    => "primary_menu", 
					    'menu'              => "ul",
					    'menu_class'        => "a", 
					    'menu_id'           => "b",
					    'container'         => "nav",
					    'container_class'   => "main-menu",
					    'container_id'      => "menubar",
					    // 'fallback_cb'       => "", 
					    // 'before'            => "<div class='before'>", 
					    // 'after'             => "</div>", 
					    // 'link_before'       => "<span>",
					    // 'link_after'        => "</span>",
					    // 'echo'              => "",
					    // 'depth'             => "",
					    // 'walker'            => "", 
					    // 'items_wrap'        => "",
					    // 'item_spacing'      => "10",
				);

				wp_nav_menu($args);
			?>
		<!-- </nav> -->

		<div class="clr"></div>
		</div>
	</header>