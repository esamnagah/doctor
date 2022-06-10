<?php

$page = "services";

require './includes/header.php';
require './includes/navbar.php';?>
<div class="card-group">

	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Services</h2>
						<p>More than 30 analyzes you can view them
</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
                         
					<?php foreach($services as $id=>$prod){ ?>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="<?=$prod['iocn']?>" aria-hidden="true"></i></div>
								<h3 class="title">	<?=$prod['title']?> </h3>
								<p class="description">
								<?=$prod['description']?>
								</p>
								<a href="post_services.php?pid=<?=$id?>" class="new-btn-d br-2">Read More</a>
							</div>
						</div>

				<?php	} ?>
						
				
					
					</div>
				</div>
			</div>			
		</div>
	</div>

  
</div>

<?php
require './includes/footer.php';
?>


