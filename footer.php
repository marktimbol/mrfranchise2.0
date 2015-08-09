		<div id="ourBrands" class="parallax dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<h2>Our Brands</h2>
							<p>&nbsp;</p>

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
								foreach( $thumbs as $thumb ) { ?>
								<li class="col-md-2">
									<figure class="brand">
										<a href="<?=str_replace(['.png', '.jpg'], '.php', $thumb); ?>">
											<img src="public/images/thumbs/<?=$thumb?>" alt="" title="" class="img-responsive" />
										</a>
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
						<button type="button" class="btn btn-primary">Send Inquiry</button>
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