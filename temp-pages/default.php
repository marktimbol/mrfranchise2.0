<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Mr. Franchise</title>
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C900%7CRoboto%7CRoboto+Slab%3A300%2C400&#038;ver=3.7.1" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="public/css/normalize.css" />
		<link rel="stylesheet" href="public/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/app.css" />
		<link rel="stylesheet" href="public/css/swiper.css" />
		
		<link rel="stylesheet" href="style.css" />	
		<script src="public/js/vendor/modernizr.js"></script>
	
	</head>
	
	<body class="page-default">
		
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1><a href="index.php"><img src="public/images/logo.png" alt="Mr. Franchise" title="Mr. Franchise" /></a></h1>
					</div>
				</div>	
			</div>
		</header>

		<div class="rightside-menu">
			
			<div class="menu-cell"></div>

			<a data-rel="1" class="menu-cell global-a" href="als-beef.php">
				<img src="public/images/thumbs/als-beef.png" alt="">
			</a>
		    <a data-rel="2" class="menu-cell global-a" href="french-fry-heaven.php">
		    	<img src="public/images/thumbs/french-fry-heaven.png" alt="">
		    </a>
		    <a data-rel="3" class="menu-cell global-a" href="krush-burger.php">
		    	<img src="public/images/thumbs/krush-burger.png" alt="">
		    </a>
		    <a data-rel="4" class="menu-cell global-a" href="lobster-joint.php">
		    	<img src="public/images/thumbs/lobster-joint.png" alt="">
		    </a>
		    <a data-rel="5" class="menu-cell global-a" href="nancy-pizza.php">
		    	<img src="public/images/thumbs/nancy-pizza.png" alt="">
		    </a>

		    <a data-rel="6" class="menu-cell global-a" href="queens-chips.php">
		    	<img src="public/images/thumbs/queens-chips.png" alt="">
		    </a>	

		    <div class="menu-cell"></div>
		    <div class="menu-cell"></div>
		
		    <div class="rightside-popups">
		        <img src="public/images/intro-circle.png" class="intro-circle" alt="">
			    <div data-rel="1" class="line-wrapper">
			    		<img src="public/images/intro-line-1.png" class="intro-line" alt="">
			    	</div>
			    <div data-rel="2" class="line-wrapper">
			    	<img src="public/images/intro-line-2.png" class="intro-line" alt="">
			    </div>
			    <div data-rel="3" class="line-wrapper">
			    	<img src="public/images/intro-line-4.png" class="intro-line" alt="">
			    </div>
			    <div data-rel="4" class="line-wrapper">
			    	<img src="public/images/intro-line-5.png" class="intro-line" alt="">
			    </div>
				<div data-rel="5" class="line-wrapper">
					<img src="public/images/intro-line-6.png" class="intro-line" alt="">
				</div>
				<div data-rel="6" class="line-wrapper">
					<img src="public/images/intro-line-7.png" class="intro-line" alt="">
				</div>				

			    <a class="global-a" data-rel="1" href="#"><img src="public/images/temp/image.png" alt=""></a>
			    <a class="global-a" data-rel="2" href="#"><img src="public/images/temp/image.png" alt=""></a>
			    <a class="global-a" data-rel="3" href="#"><img src="public/images/temp/image.png" alt=""></a>
			    <a class="global-a" data-rel="4" href="#"><img src="public/images/temp/image.png" alt=""></a>
			    <a class="global-a" data-rel="5" href="#"><img src="public/images/temp/image.png" alt=""></a>
			    <a class="global-a" data-rel="6" href="#"><img src="public/images/temp/image.png" alt=""></a>
			
			    <span class="title" data-rel="1">GO TO Swiss Chalet <br> FRANCHISING</span>
			    <span class="title" data-rel="2">GO TO East Side Mario's <br> FRANCHISING</span>
			    <span class="title" data-rel="3">GO TO Milestones <br> FRANCHISING</span>
			    <span class="title" data-rel="4">GO TO Montana's <br> FRANCHISING</span>
			    <span class="title" data-rel="5">GO TO Montana's <br> FRANCHISING</span>
			    <span class="title" data-rel="6">GO TO Montana's <br> FRANCHISING</span>
			</div>
		</div>		
		

		<div class="page-content parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Page Title</h2>
					</div>
				</div>
			</div>
		</div>

		<div id="ourBrands" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<h2>Our Brands</h2>
							<p>&nbsp;</p>

							<ul class="brands">
								<?php
								$thumbs = ['als-beef.png', 'french-fry-heaven.png', 'krush-burger.png', 'lobster-joint.png', 'nancy-pizza.png', 'queens-chips.jpg'];
								foreach( $thumbs as $thumb ) { ?>
								<li class="col-md-2">
									<figure class="brand">
										<img src="public/images/thumbs/<?=$thumb?>" alt="" title="" class="img-responsive" />
									</figure>
								</li>
								<?php } ?>
							</ul>	

							<div class="clearfix"></div>

							<h3>Ready to apply for your Franchise Opportunity?</h3>

							<p class="text-center mt-40">
								<a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Inquire Now</a>
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

		<!-- Modal -->
		<div class="modal fade" id="inquireFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Inquire here</h4>
					</div>
					<div class="modal-body">
						<p class="">
						Are you ready to take the next step and get started? Please fill out our online inquiry form to receive a welcome email which includes an information package and Mr. Franchise Application for your review.
						</p>
						<p class="">
						Now that you have familiarized yourself with Mr. Franchise Franchising and believe a Mr. Franchise is right for you please complete our online inquiry form.
						</p>
						<form method="POST">
                            <div class="form-group">
                            	<label for="name">Name</label>
                            	<input type="text" id="name" name="name" placeholder="Name" class="form-control">
                            </div>
                       		<div class="form-group">
                       			<label for="email">eMail</label>
                            	<input type="email" id="email" name="email" placeholder="eMail" class="form-control">
                            </div>	
                       		<div class="form-group">
                       			<label for="phone">Phone</label>
                            	<input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                            </div>	

                           <div class="form-group">
                            	<button type="submit" name="submit" class="btn btn-clear btn-sm">Inquire Now</button>
                            </div>
                        </form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<script src="public/js/vendor/jquery.js"></script>
		<script src="public/js/vendor/bootstrap.min.js"></script>
		<script src="public/js/vendor/swiper.js"></script>
		
		<script src="public/js/app.js"></script>	

	
	</body>
</html>