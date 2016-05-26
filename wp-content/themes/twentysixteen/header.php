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

					<a class="navbar-brand home" href="index.html">
						<img src="img/logo.jpg" alt="Universal logo" class="hidden-xs hidden-sm logo">
						<img src="img/logo-small.jpg" alt="Universal logo" class="visible-xs visible-sm logo-small"><span class="sr-only">Muvi ir al home page</span>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
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

					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php clean_custom_menu( 'primary' ); ?>
					<?php endif; ?>

					<ul class="nav navbar-nav navbar-right" style="display: none;">


						<li class="dropdown active">
							<a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Inicio </a>

						</li>
						<li class="dropdown use-yamm yamm-fw">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="row">
											<div class="col-sm-6">

											</div>
											<div class="col-sm-3">
												<h3>Apartamentos</h3>
												<ul>
													<li><a href="index.html">Residencial E + V III</a>
													</li>
												</ul>
												<h3>Locales comerciales</h3>
												<ul>
													<li><a href="index2.html">Metropolitano I</a>
													</li>
													<li><a href="index2.html">Metropolitano III</a>
													</li>
												</ul>k
												<h3>Solares</h3>
												<ul>
													<li><a href="index.html">Residencial E + V III</a>
													</li>
													<li><a href="index2.html">Metropolitano I</a>
													</li>
													<li><a href="index2.html">Metropolitano III</a>
													</li>
													<li><a href="index2.html">Solares</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown use-yamm yamm-fw">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactanos</a>
						</li>
						<!-- ========== FULL WIDTH MEGAMENU ================== -->
						<li class="dropdown use-yamm yamm-fw">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Sobre Nosotros</b></a>
						</li>
						<!-- ========== FULL WIDTH MEGAMENU END ================== -->

						<!--  <li class="dropdown">
                             <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                             <ul class="dropdown-menu">
                                 <li><a href="contact.html">Contact option 1</a>
                                 </li>
                                 <li><a href="contact2.html">Contact option 2</a>
                                 </li>
                                 <li><a href="contact3.html">Contact option 3</a>
                                 </li>

                             </ul>
                         </li> -->
					</ul>

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


<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>

					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->


			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
