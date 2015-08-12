<?php include('header.php'); ?>
	
	<body class="brand-page als-beef-page">
		
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-1 col-xs-3">
							<h1>
								<a href="index.php">
									<img src="public/images/thumbs/als-beef.png" alt="" title="" />
								</a>
							</h1>
						</div>

						<div class="col-md-3 col-xs-3">
							<h2>Franchising</h2>
						</div>

						<div class="col-md-7">

							<?php include('top-nav.php'); ?>
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
					<img src="public/images/als/als-beef-bg.jpg" />

					<div class="swiper-content">
						<div class="row">	
							<div class="col-md-10">
								<p class="lead">
								We are always looking to expand.<br />
								Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
		                        <ul>
									<li>Bahrain</li>
		                       		<li>Oman</li>   
		                       		<li>Egypt</li>     
		                       		<li>For other locations:</li>      		                       		
		                        </ul>	

		                        <div class="clearfix"></div>

								<p><a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Click here</a></p>
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>

				<div class="swiper-slide">
					<img src="public/images/als/als-beef-bg.jpg" />

					<div class="swiper-content">	
						<div class="row">
							<div class="col-md-10">
								<p class="lead">
									Al's beef is dry roasted in a secret recipe blend of 100% pure spices and natural juices. Our beef is pure. The Au Jus or "Gravy" as Al calls it, gives our beef its unmistakable flavor.  We will add as little or as much gravy to your sandwich as you want. But most Al's connoisseurs prefer their beef sandwich wet or dipped, right into the gravy, and then add sweet and hot peppers.
								</p>
		                        					
								<p><a href="http://www.alsbeef.com/" class="btn btn-clear" target="_blank">Visit Website</a></p>
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>	

				<div class="swiper-slide desktop-only">
					<img src="public/images/als/als-beef-bg.jpg" />

					<div class="swiper-content media-gallery">	
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-5">
										<?php foreach( range(1,12) as $image ) { ?>
										<div class="col-md-3">
											<a href="public/images/als/gallery/<?=$image?>.jpg" rel="prettyPhoto[thumbs]">
												<img src="public/images/als/gallery/<?=$image?>.jpg" alt="" title="" class="img-responsive" />
											</a>
										</div>
										<?php } ?>
									</div>

									<div class="col-md-4">
										<a href="https://www.youtube.com/watch?v=-Qoa1R1Svnk" rel="prettyPhoto[video]">
											<img src="public/images/als/gallery/video-thumb.jpg" alt="" title="" class="img-responsive" />
										</a>
									</div>

									<div class="col-md-3">
										<ul class="press">
											<?php foreach( range(1,5) as $press ) { ?>
											<li>
												<h4><a href="#">Press title goes here</a></h4>
												<p>Press short description goes here</p>
											</li>
											<?php } ?>
										</ul>
									</div>	
								</div>
							</div>
						</div>
					</div>

					<div class="overlay"></div>
				</div>												

			</div>

			<div class="container swiper-custom-nav">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-11 col-md-offset-1">
								<ul>	
								    <li class="swiper-pagination-switch active">
								    	<a href="#"><strong>Immediate</strong>Opportunities</a>
								    </li>
								    <li class="swiper-pagination-switch ">
								    	<a href="#"><strong>Why</strong>Al's Beef</a>
								    </li>
								    <li class="swiper-pagination-switch desktop-only">
								    	<a href="#"><strong>Media</strong>Gallery</a>
								    </li>								    
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
							
		</div>		

		<a id="tellMeMore" class="btn btn-clear" href="#featuredOpportunities">Hmm...Interesting, tell me more</a>

		<?php include('brands-carousel.php'); ?>
	
		<div id="featuredOpportunities" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content align-left light-background">
							<div class="col-md-2 col-md-offset-1">
					            <div class="logo-inquire">
					                <img src="public/images/thumbs/als-beef.png" alt="" title="" />
					                <p><a class="btn btn-clear" href="#" data-toggle="modal" data-target="#inquireFormModal">Inquire now</a></p>
					            </div>
						   	</div>

							<div class="col-md-8">
							
								<h2>Who we're looking for</h2>
								<p class="lead">
									People passionate about Al's Beef<br />
									People who want to own their own business/control their own destiny<br />
									People with strong leadership skills<br />
									People who will be actively engaged in delivering the PERFECT GUEST EXPERIENCE and restaurant profitability<br />
									People with a proven track record of success in business<br />
									People with strong local knowledge and relationships in the community they will do business in								
								</p>
								
							</div>

							
						</div>
					</div>
				</div>
			</div>	

			<div class="brand-overlay"></div>

		</div>



<?php include('footer.php'); ?>