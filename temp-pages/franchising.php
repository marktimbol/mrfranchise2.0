<?php
	/**
	 * Template Name: Brand Franchising
	 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Brand Franchising</title>
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C900%7CRoboto%7CRoboto+Slab%3A300%2C400&#038;ver=3.7.1" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/normalize.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/app.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/swiper.css" />
		
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/style.css" />	
		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/vendor/modernizr.js"></script>

		<?=wp_head()?>
	
	</head>
	
	<body>
		
		<header class="">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1><a href="#"><img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/logo.png" alt="Mr. Franchise" title="Mr. Franchise" /></a></h1>
					</div>
				</div>	
			</div>
		</header>

		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php for($i = 1; $i <= 2; $i++) { ?>
				<div class="swiper-slide">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/temp/slide<?=$i?>.jpg" />
					<div class="overlay"></div>
				</div>
				<?php } ?>
			</div>
			
 			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	

		<div id="featuredOpportunities" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="section-content">
							<h2>Featured Opportunities</h2>
							<p class="lead">
								We are always looking to expand.<br />
								Right now we're excited about - but not limited to - opportunities in these exciting locations!
							</p>

							<ul class="brands">
								<?php foreach( range(1,6) as $index ) { ?>
								<li class="col-md-2">
									<figure class="brand">
										<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/temp/brand-thumb.png" class="img-responsive" alt="" title="" />
										<figcaption>
											<div class="info">
												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>

												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>

												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>			
											</div>		

											<div class="inquiry">
												<form method="POST">
						                            <div class="form-group">
						                            	<input type="text" placeholder="Name" name="name" class="form-control">
						                            </div>
					                           		<div class="form-group">
						                            	<input type="email" placeholder="eMail" name="email" class="form-control">
						                            </div>	
					                           		<div class="form-group">
						                            	<input type="text" placeholder="Phone" name="phone" class="form-control">
						                            </div>	

						                           <div class="form-group">
						                            	<input type="submit" name="submit" class="btn btn-clear btn-sm" value="Inquire now" />
						                            </div>
						                        </form>
											</div>															
										</figcaption>
									</figure>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>

		<div id="about" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="section-content align-left">
							<h2>Truly a <strong>Canadian</strong> icon</h2>
							<p class="lead">
								CARA is Canada's most historic and largest full service restaurant company and owns many of Canada's most recognizable and favourite restaurant concepts including: Swiss Chalet, East Side Mario's, Milestones, Casey's, Bier Markt, Kelsey's, Fionn MacCool's, Montana's and Harvey's.
							</p>

							<p class="mt-40">
								<a href="#" class="btn btn-clear">See Franchise Opportunities</a> &nbsp; <a href="#" class="btn btn-clear">View our history</a>
							</p>
						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>	

		<div id="ourBrands" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="section-content">
							<h2>Our Brands</h2>
							<p>&nbsp;</p>

							<ul class="brands">
								<?php foreach( range(1,6) as $index ) { ?>
								<li class="col-md-2">
									<figure class="brand">
										<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/temp/brand-thumb.png" alt="" title="" class="img-responsive" />
										<figcaption>
											<h4>10 location</h4>
										</figcaption>
									</figure>
								</li>
								<?php } ?>
							</ul>	

							<div class="clearfix"></div>

							<h3>Ready to apply for your Franchise Opportunity?</h3>

							<p class="text-center mt-40">
								<a href="#" class="btn btn-clear">Inquire Now</a>
							</p>							
						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>			


		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2015 Mr. Franchise. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>

		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/vendor/jquery.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/vendor/bootstrap.min.js"></script>
		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/vendor/swiper.js"></script>
		
		<script src="<?=get_bloginfo('stylesheet_directory');?>/public/js/app.js"></script>	

		<?=wp_footer()?>
	
	</body>
</html>