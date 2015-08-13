<?php 
	$brand = array(
		'name'	=> "Krush Burger",
		'logo'	=> 'krush-burger.png',
		'directory' => 'krush-burger',

		'slides' => array(
			0 => array(
				'background' => 'public/images/krush-burger/slide1.JPG',
				'content' => "
					<p class='lead'>
					We are always looking to expand.<br />
					Right now we're excited about - but not limited to - opportunities in these exciting locations!
					</p>
                    <ul>
						<li>KSA (Middle &amp; East Region)</li>
						<li>Bahrain</li>
						<li>Kuwait</li>
						<li>Oman</li>
						<li>Egypt</li>
						<li>For other locations:</li>             		                       		
                    </ul>						
					<p><a href='#' class='btn btn-clear' data-toggle='modal' data-target='#inquireFormModal'>Click here</a></p>
				
				",

				'class' => ''
			),

			1 => array(
				'background' => 'public/images/krush-burger/slide1.JPG',
				'content' => "
					<p class='lead'>
					Krush Burger is committed to providing a unique burger experience in a fun and lively atmosphere. We prepare our signatures sauces in-house daily, cook our fresh never-frozen Angus Beef to order and hand toast each freshly baked Brioche Bun.
					</p>
					<p class='lead'>
					Krush Burger, wholly owned by Krush Burger International LLC was founded in 2011 and is headquartered in Roseville, CA. 	
					</p>
                    					
					<p><a href='http://www.krushburger.com/' class='btn btn-clear' target='_blank'>Visit Website</a></p>
											
				",

				'class' => ''
			),	

			2 => array(
				'background' => 'public/images/krush-burger/slide1.JPG',
				'content' => 'gallery',
				'class' => 'media-gallery'
				)
		)
	);

	include('header.php');

?>
	
	<body class="brand-page krush-burger-page">
		
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1 col-xs-3">
								<h1>
									<a href="index.php">
										<img src="public/images/thumbs/krush-burger.png" alt="" title="" />
									</a>
								</h1>
							</div>

							<div class="col-md-3 col-xs-3">
								<h2>Franchising</h2>
							</div>

							<div class="col-md-7 float-right">

								<?php include('top-nav.php'); ?>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<?php include('right-menu.php'); ?>	

		<div class="clearfix"></div>

		<div class="swiper-container">
			<div class="swiper-wrapper">
				
				<div class="swiper-slide">
					<img src="public/images/krush-burger/slide1.JPG" />

					<div class="swiper-content">
						<div class="row">
							<div class="col-md-10">
								<p class="lead">
								We are always looking to expand.<br />
								Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
		                        <ul>
									<li>KSA (Middle &amp; East Region)</li>
									<li>Bahrain</li>
									<li>Kuwait</li>
									<li>Oman</li>
									<li>Egypt</li>
									<li>For other locations:</li>             		                       		
		                        </ul>						
								<p><a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Click here</a></p>
							
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>

				<div class="swiper-slide">
					<img src="public/images/krush-burger/slide1.JPG" />

					<div class="swiper-content">	
						<div class="row">
							<div class="col-md-10">
								<p class="lead">
								Krush Burger is committed to providing a unique burger experience in a fun and lively atmosphere. We prepare our signatures sauces in-house daily, cook our fresh never-frozen Angus Beef to order and hand toast each freshly baked Brioche Bun.
								</p>
								<p class="lead">
								Krush Burger, wholly owned by Krush Burger International LLC was founded in 2011 and is headquartered in Roseville, CA. 	
								</p>
		                        					
								<p><a href="http://www.krushburger.com/" class="btn btn-clear" target="_blank">Visit Website</a></p>
							
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>		

				<div class="swiper-slide desktop-only">
					<img src="public/images/krush-burger/slide1.JPG" />

					<div class="swiper-content media-gallery">	
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="no-padding">
											<?php foreach( range(1,8) as $image ) { ?>
											<div class="col-md-3">
												<a href="public/images/krush-burger/gallery/<?=$image?>.jpg" rel="prettyPhoto[thumbs]">
													<img src="public/images/krush-burger/gallery/<?=$image?>.jpg" alt="" title="" class="img-responsive" />
												</a>
											</div>
											<?php } ?>
										</div>
									</div>

									<div class="col-md-4">
										<a href="https://www.youtube.com/watch?v=-Qoa1R1Svnk" rel="prettyPhoto[video]">
											<img src="public/images/als/gallery/video-thumb.jpg" alt="" title="" class="img-responsive" />
										</a>
									</div>

<!-- 									<div class="col-md-3">
										<ul class="press">
											<?php foreach( range(1,5) as $press ) { ?>
											<li>
												<h4><a href="#">Press title goes here</a></h4>
												<p>Press short description goes here</p>
											</li>
											<?php } ?>
										</ul>
									</div>	 -->
								</div>
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>											

			</div>
			
 			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>

			<div class="container swiper-custom-nav">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-11 col-md-offset-1">
							<ul>	
							    <li class="swiper-pagination-switch active">
							    	<a href="#"><strong>Immediate</strong>Opportunities</a>
							    </li>
							    <li class="swiper-pagination-switch ">
							    	<a href="#"><strong>Why</strong>Krush Burger</a>
							    </li>
								    <li class="swiper-pagination-switch desktop-only ">
								    	<a href="#"><strong>Media</strong>Gallery</a>
								    </li>								    
							</ul>
						</div>
					</div>
				</div>
			</div>				
		</div>		
	
		<a id="tellMeMore" class="btn btn-clear" href="#featuredOpportunities">Hmm...Interesting, tell me more</a>
		
		<?php include('brands-carousel.php'); ?>

		<?php include('mobile-mediaGallery.php'); ?>

		<div id="featuredOpportunities" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content align-left light-background">
							<div class="row">
								<div class="col-md-2">
						            <div class="logo-inquire">
						                <img src="public/images/thumbs/krush-burger.png" alt="" title="" />
						                <p><a class="btn btn-clear" href="#" data-toggle="modal" data-target="#inquireFormModal">Inquire now</a></p>
						            </div>
							   	</div>

								<div class="col-md-10">
								
									<h2>Who we're looking for</h2>
									<ul class="lead">
										<li>People passionate about Krush Burger</li>
										<li>People who want to own their own business/control their own destiny</li>
										<li>People with strong leadership skills</li>
										<li>People who will be actively engaged in delivering the PERFECT GUEST EXPERIENCE and restaurant profitability</li>
										<li>People with a proven track record of success in business</li>
										<li>People with strong local knowledge and relationships in the community they will do business in</li>
									</ul>
									
								</div>
							</div>

							
						</div>
					</div>
				</div>
			</div>	

			<div class="brand-overlay"></div>

		</div>


<?php include('footer.php'); ?>