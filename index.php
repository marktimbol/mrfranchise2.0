<?php include('header.php');?>
	
	<body>
		
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-1">
							<h1>
								<a href="index.php">
									<img src="public/images/logo.png" alt="Mr. Franchise" title="Mr. Franchise" />
								</a>
							</h1>
						</div>


						<div class="col-md-7 col-md-offset-3">

							<?php include('top-nav.php'); ?>
							
						</div>
						
					</div>
				</div>	
			</div>
		</header>

		<?php include('right-menu.php'); ?>	
		
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( range(1,2) as $index) { ?>
				<div class="swiper-slide">
					<img src="public/images/temp/slide<?=$index?>.jpg" />
					<div class="swiper-content">
						<div class="col-md-6">
							<h2>With Over <strong>840</strong> locations across canada and system sales in excess of <strong>$1.7 billion</strong>, CARA is one of Canada's most successful Restaurant companies.</h2>
							<p class="mt-40"><a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Inquire here</a></p>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
				<?php } ?>
			</div>
			<!--<div class="swiper-pagination"></div>
 			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div> -->
		</div>
	

		<div id="featuredOpportunities" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<h2>Featured Opportunities</h2>
							<p class="lead">
								We are always looking to expand.<br />
								Right now we're excited about - but not limited to - opportunities in these exciting locations!
							</p>

							<ul class="brands">
								<?php
								$thumbs = array(
									'als-beef.png',
									'french-fry-heaven.png',
									'krush-burger.png',
									'lobster-joint.png',
									'nancy-pizza.png',
									'queens-chips.jpg'
								);

								foreach( $thumbs as $thumb) { ?>
								<li class="col-md-2">
									<figure class="brand">
										<img src="public/images/thumbs/<?=$thumb?>" class="img-responsive" alt="" title="" />
										<figcaption>
											<div class="info">
<!-- 												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>

												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>

												<p><strong>Lorem Ipsum</strong><br />
												Dolor sit amet
												</p>	 -->		
											</div>		

											<div class="inquiry">
													<a href="#" class="btn btn-clear btn-sm btn-block" data-toggle="modal" data-target="#inquireFormModal">Inquire</a>
<!-- 												<form method="POST">
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
						                            	<button type="submit" name="submit" class="btn btn-clear btn-sm">Inquire Now</button>
						                            </div>
						                        </form> -->
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
					<div class="col-md-8">
						<div class="content align-left">
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

<?php include('footer.php'); ?>