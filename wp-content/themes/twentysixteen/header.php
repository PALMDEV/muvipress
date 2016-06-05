<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--	################### Movie ####################-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
	<!-- Bootstrap and Font Awesome css -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Responsivity for older IE -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Favicon and apple touch icons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png" />
	<!-- owl carousel css -->
	<!--	################### End Movie ####################-->
<!--	<link rel="profile" href="http://gmpg.org/xfn/11">-->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('muvi'); ?>>
<!-- ########################## movie top ########################-->
<div class="all">
<header>

	<!-- *** TOP ***-->
	<div id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 contact">
					<p class="hidden-sm hidden-xs">Conctactanos al 809-971-4441 o soporte@muvi.com</p>
					<p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
					</p>
				</div>
				<div class="col-xs-7">
					<div class="social">
						<a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
						<a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
						<a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
					</div>

					<div class="login">
						<a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Entrar</span></a>
						<a href="customer-register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Registrarse</span></a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- *** TOP END *** -->

	<!-- *** NAVBAR *** -->

	<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

		<div class="navbar navbar-default yamm" role="navigation" id="navbar">

			<div class="container">
				<div class="navbar-header">

					<a class="navbar-brand home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri()?>/img/logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="hidden-xs hidden-sm logo">
						<img src="<?php echo get_template_directory_uri()?>/img/logo-small.jpg" alt="<?php bloginfo( 'name' ); ?>" class="visible-xs visible-sm logo-small"><span class="sr-only">Muvi ir al home page</span>
<!--						<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
					</a>
					<div class="navbar-buttons">
						<button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-align-justify"></i>
						</button>
					</div>
				</div>
				<!--/.navbar-header -->

				<div class="navbar-collapse collapse" id="navigation">
					<?php if ( has_nav_menu( 'primary' ) ) :

							wp_nav_menu( array(
								'theme_location' => 'primary',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'nav navbar-nav navbar-right',
								'fallback_cb' => 'wp_page_menu',
								//Process nav menu using our custom nav walker
								'walker' => new wp_bootstrap_navwalker())
							);
					 endif; ?>

				</div>
				<!--/.nav-collapse -->



				<div class="collapse clearfix" id="search">

					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
						</div>
					</form>

				</div>
				<!--/.nav-collapse -->

			</div>


		</div>
		<!-- /#navbar -->

	</div>

	<!-- *** NAVBAR END *** -->

</header>

</div>
<!-- ########################## End movie top ########################-->


<div id="content" class="site-content">
