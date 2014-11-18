<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $wl_theme_options = weblizar_get_options(); ?>
		<?php if($wl_theme_options['upload_image_favicon']!='') : ?>
		<link rel="shortcut icon" href="<?php  echo $wl_theme_options['upload_image_favicon']; ?>" /> 
		<?php endif; ?>  
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="container-fluid logo">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="img-rounded">
						</a>
					</div>
					<div class="col-md-11">
						<div class="row">
							<div class="col-md-12">
								<h1><?php echo get_bloginfo('name'); ?></h1>
							</div>
							<div class="col-md-12">
								<?php echo get_bloginfo('description'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="<?php echo get_post_type_archive_link('product'); ?>">Products</a></li>
						<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About Us' ) ) ); ?>">About Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">

						<?php if (is_user_logged_in()) :?>

						<li>
							<a href="<?php echo wp_logout_url( get_option('siteurl') ); ?>">Logout</a>
						</li>
						<li>
							<a href="<?php echo get_option('siteurl') ?>/wp-admin">Admin</a>
						</li>
						<?php else: ?>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
							<div class="dropdown-menu login-navbar">
								<div class="row">
									<div class="col-md-12">

										<?php wp_login_form( array(
											'echo'				=> true,
											'redirect'			=> site_url( '/login/ ' ), 
											'form_id'        => 'loginform',
											'label_username' => __( 'Username' ),
											'label_password' => __( 'Password' ),
											'label_remember' => __( 'Remember Me' ),
											'label_log_in'   => __( 'Log In' ),
											'id_username'    => 'user_login',
											'id_password'    => 'user_pass',
											'id_remember'    => 'rememberme',
											'id_submit'      => 'wp-submit',
											'remember'       => true,
											'value_username' => NULL,
											'value_remember' => false
										) ); ?> 

									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="<?php echo get_option('siteurl') ?>/register">Register</a>
							
							
						</li>

						<?php endif; ?>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>