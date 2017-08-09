<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container">
		<h1>
			<a href="index.html">
				<?php bloginfo( 'name' ); ?>
			</a>
			<small><?php bloginfo( 'description' ); ?></small>
		</h1>
		<div class="h_right">
			<form method="get" action="<?php esc_url( home_url( '/' ) ); ?>">
				<input type="text" name="s" placeholder="Search...">
			</form>
		</div>
	</div>
</header>

<nav class="nav main-nav">
	<div class="container">
		<?php
		$args = array(
			'theme_location' => 'primary'
		); ?>

		<?php wp_nav_menu( $args ); ?>
	</div>
</nav>

<div class="container content">
	<div class="main block">
		<article class="post">
			<h2>Blog Post 1</h2>
			<p class="meta">Posted at 11:00 on August 9 by Admin</p>
			<p>Sed porttitor lectus nibh. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Cras
				ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.
				Pellentesque in ipsum id orci porta dapibus.</p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
				neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Vestibulum ac
				diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus.</p>
			<a class="button" href="#">Read More</a>
		</article>

		<article class="post">
			<h2>Blog Post 1</h2>
			<p class="meta">Posted at 11:00 on August 9 by Admin</p>
			<p>Sed porttitor lectus nibh. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Cras
				ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.
				Pellentesque in ipsum id orci porta dapibus.</p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
				neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Vestibulum ac
				diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus.</p>
			<a class="button" href="#">Read More</a>
		</article>

		<article class="post">
			<h2>Blog Post 1</h2>
			<p class="meta">Posted at 11:00 on August 9 by Admin</p>
			<p>Sed porttitor lectus nibh. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Cras
				ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.
				Pellentesque in ipsum id orci porta dapibus.</p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
				neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Vestibulum ac
				diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus.</p>
			<a class="button" href="#">Read More</a>
		</article>
	</div>
	<div class="side">
		<div class="block">
			<h3>Sidebar Head</h3>
			<p>Sed porttitor lectus nibh. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Cras
				ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.
				Pellentesque in ipsum id orci porta dapibus.</p>
			<a class="button">More</a>
		</div>
	</div>
</div>
<footer class="main-footer">
	<div class="container">
		<div class="f_left">
			<p>&copy; 2017 - Advanced WP Theme</p>

		</div>
		<div class="f_right">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="#">Services</a></li>
			</ul>
		</div>
	</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>





