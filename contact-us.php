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
						<h2>Contact Us</h2>
						<p class="lead">Still have questions? Let's talk</p>

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
                            	<label for="message">Message</label>
                            	<textarea rows="10" name="message" id="message" class="form-control"></textarea>
                            </div>	

                           <div class="form-group">
                            	<button type="submit" name="submit" class="btn btn-clear">Let's Talk</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
			


<?php  include('footer.php'); ?>