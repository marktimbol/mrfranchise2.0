<?php include('header.php'); ?>
	
	<body class="page-default">
		
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
		

		<div class="page-content parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>About Mr. Franchise</h2>

						<div class="row">
							<?php
							$photos = array(
								'Karim_El_Ghazl.jpg',
								'Jim_Underwood.jpg',
								'Paul_Fuller.jpg',
								'Sara_Mahdi.jpg'
								);
							
							foreach( $photos as $photo ) {
							?>

								<div class="col-md-3">
									<img src="public/images/<?=$photo?>" alt="" title="" class="img-responsive" />
								</div>	

							<?php } ?>	
						</div>	

						<p>&nbsp;</p>															

						<p class="lead">
							Mr. Franchise is a full service franchise brokerage firm. We are proud to have established a unique presence in the franchising sector in that all our affiliated brokers are not only trained and experienced franchise brokers, but also franchise and/or business owners themselves. When clients pose questions regarding franchising our answers are derived not only from classroom training but from real world experience. We have found that real life rarely co-operates with textbook business examples!
						</p>
						<p class="lead">
							We currently hold relationships with over 500 of the Nations leading franchise brands. Our expansive portfolio provides our franchise buyer clients with a much broader and varied pool of franchises to research. Having more choices means our clients can choose the most appropriate franchise based on their background, skills and goals – rather than having to compromise.
						</p>
						<div>
							<a href="contact-us.php" class="btn btn-clear">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			


<?php  include('footer.php'); ?>