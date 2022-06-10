<?php

$page = "information";

require './includes/header.php';
require './includes/navbar.php';?>
<div class="card-group">

	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>information</h2>
</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
                         
					<?php foreach($information as $id=>$prod){ ?>
						<div class="item">
							<div class="serviceBox">
								<div class="service">
                                 <img src="<?=$prod['image']?>" alt="">               
                               </div>
								<h3 class="title">	<?=$prod['title']?> </h3>
								<p class="description">
								<?=$prod['desc']?>
								</p>
								<a href="post_blog.php?pid=<?=$id?>" class="new-btn-d br-2">Read More</a>
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


