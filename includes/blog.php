	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
                       
			<?php foreach(array_slice( $information,0,3,true) as $id=>$prod){ ?>



				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="<?=$prod['image']?>" alt="" />
						</div>
						<div class="item-meta">
							<!-- <a href="#"><i class="fa fa-comments-o"></i> 5 Comment </a> -->
							<a href="#"><i class="fa fa-user-o"></i> <?=$prod['admin']?></a>
							<!-- <span class="dti">25 July 2018</span> -->
						</div>
						<h2><?=$prod['title']?></h2>
						<p> <?=$prod['desc']?> </p>
						<a class="new-btn-d br-2" href="post_blog.php?Bid=<?=$id?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>

				
			
		<?php	} ?>
			</div><!-- row -->
			<a href="information.php" class="new-btn-d " style="color:red ; margin-left: 40% ; padding-top:20px ; margin-top:20px ;">Read All Information</a>

		</div>
	</div>
	<!-- End Blog -->