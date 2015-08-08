<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Franchise</title>
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C900%7CRoboto%7CRoboto+Slab%3A300%2C400&#038;ver=3.7.1" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/normalize.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/app.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/timeline.css" />
		
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/style.css" />	
		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/vendor/modernizr.js"></script>

		<?=wp_head()?>
	
	</head>
	
	<body>

		<header>
			<div class="container">
				<div class="row header-content">
					<div class="col-md-6">
						<h1><a href="<?=get_bloginfo('url');?>">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/logo.png" alt="Mr. Franchise" title="Mr. Franchise" />
						</a></h1>
					</div>
					<div class="col-md-6">
						<?php /*
						<h3 class="desktop-only">Email us today for a consultation<br /><a href="mailto:help@mrfranchise.ae">help@mrfranchise.ae</a></h3>
						*/ ?>
					</div>
					
				</div>
			</div>
		</header>

		<?php include('topnav.php'); ?>		

		<?php if(is_front_page() || is_home()) { ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="slideshow">
						<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
					</div>	
					<div class="marquee">
						<ul id="scroller">
							<a href="http://frenchfryheaven.com/" target="_blank">Just sold!</strong> &nbsp; <img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/thumb/french-fry-heaven.jpg" alt="" title="" /></a>
							<a href="http://www.alsbeef.com/" target="_blank">Just sold!</strong> &nbsp; <img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/thumb/als-beef.jpg" alt="" title="" /></a>
							<a href="http://www.queenschips.eu/index.php/en/" target="_blank">Just sold!</strong> &nbsp; <img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/thumb/queens-chips.jpg" alt="" title="" /></a>
						</ul>
					</div>			
				</div>
			<?php } ?>	
			</div>
		</div>	

