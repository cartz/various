<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<title><?php $settings->out( 'site-meta', 'title' ); ?></title>
	<meta name="description" content="<?php $settings->out( 'site-meta', 'description' ); ?>">
	<meta name="author" content="<?php $settings->out( 'site-meta', 'author' ); ?>">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php $template->url( 'images/icons/fav/favicon.ico' ); ?>">
	<link rel="apple-touch-icon" href="<?php $template->url( 'images/fav/tmfav_57.png' ); ?>">	
	<link rel="apple-touch-icon" sizes="72x72" href="<?php $template->url( 'images/fav/tmfav_72.png' ); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $template->url( 'images/fav/tmfav_114.png' ); ?>">
	
	<!-- CSS -->
	<link href="<?php $template->url( 'stylesheets/style.css' ); ?>" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php $template->url( 'stylesheets/responsive.css' ); ?>" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php $template->url( 'stylesheets/bootstrap.css' ); ?>" media="screen" rel="stylesheet" type="text/css" />
	  
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php $hook->apply( 'head' ); ?>
	
  
</head>

<body>

<div class="wrapper">

	<div class="container">

		<div class="row-fluid">
			
			<div class="span5">

				<div class="brand">

					<h1>
					<img alt="logo" src="<?php $template->url( 'images/logo.png' ); ?>" />
					</h1>

				</div>

			</div>

			<div class="span7">

				<div class="hero-unit">
					<h2 class="slab">
					<span class="slabtext">
					<?php $content->out( 'line 1', 'text' ); ?></span>
					<span class="slabtext">
					<?php $content->out( 'line 2', 'text' ); ?></span>
					<span class="slabtext">
					<?php $content->out( 'line 3', 'text' ); ?></span>
					</h2>

				</div>

			</div>
			
			<div class="row-fluid">
			
				<div class="span5">

				</div>
				
				<div class="span7">
					<h3><?php $content->out( 'contact', 'title' ); ?></h3>
					<p><?php $content->out( 'content', 'paragraph' ); ?></p>

				</div>
				
			</div>
			
			<div class="row-fluid">
			
				<div class="span5">
	
				</div>
				
				<div class="span7">
				
					<ul class="list-social">
					
						<?php $footer = $content->get( 'footer' ); ?>
						
						<?php if ( $footer['twitter'] !== '' ) { ?>
						<li class="link-twitter"><a href="<?php $content->out( 'footer', 'twitter' ); ?>"></a></li>
						<?php } ?>
						
						<?php if ( $footer['facebook'] !== '' ) { ?>
						<li class="link-facebook"><a href="<?php $content->out( 'footer', 'facebook' ); ?>"></a></li>
						<?php } ?>
						
						<?php if ( $footer['youtube'] !== '' ) { ?>
						<li><a href="<?php $content->out( 'footer', 'youtube' ); ?>"></a></li>
						<?php } ?>
						
						<?php if ( $footer['github'] !== '' ) { ?>
						<li><a href="<?php $content->out( 'footer', 'github' ); ?>"></a></li>
						<?php } ?>

					</ul>
				
				</div>
			
			</div>
		
		</div>

	</div>

	<div class="bg-1">

	</div>

	<div class="bg-2">

	</div>

	<div class="bg-3">

	</div>

</div>

<script src="javascript/jquery.js" type="text/javascript"></script>
<script src="javascript/jquery.slabtext.js" type="text/javascript"></script>
<script src="javascript/jquery.parallax.js" type="text/javascript"></script>
<script src="javascript/script.js" type="text/javascript"></script>

</body>
