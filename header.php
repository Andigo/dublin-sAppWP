<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--Header-->	 
	<?php $redux_demo = get_option( 'redux_demo' );?>
<header>	
	<div class="header wrapper">
		<div class="header-head">
			<a href="#" class="header-head-logo">
				<div class="header-head-pic"><p>i</p></div>
				<div class="header-head-text">
					<h1><?php echo $redux_demo['dublin-logo']; ?></h1>
					<span><?php echo $redux_demo['dublin-logo-sub']; ?></span>
				</div>
			</a>
			<nav class="header-head-menu">
				<ul>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'       => 'ul'
							) );
					?>
				</ul>
			</nav>
		</div>
	</div>			
</header>	
	

			
