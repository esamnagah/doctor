		<!-- Start top bar -->
		<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#appointment"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our mazen Lab!</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/favicon.ico" alt="image"> Mazen Lab</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">

					
                        <li><a class="nav-link <?php if($page == "home")     echo  'active'  ?> " href="index.php">Home</a></li>
                        <li><a class="nav-link <?php if($page == "About-Us") echo 'active'  ?> " href="about_us.php">About Us</a></li>
                        <li><a class="nav-link <?php if($page == "services") echo 'active'  ?>  " href="Services.php">Services</a></li>
						<!-- <li><a class="nav-link <?php if($page == "appiontment") echo 'active'  ?> " href="appiontment.php">Appointment</a></li> -->
						<li><a class="nav-link <?php if($page == "doctor") echo 'active'  ?>" href="doctor.php">Doctor</a></li>
                        <li><a class="nav-link <?php if($page == "information") echo 'active'  ?>" href="information.php">Information</a></li>
                        <li><a class="nav-link <?php if($page == "results") echo 'active'  ?>" href="results.php">Results</a></li>
						<li><a class="nav-link <?php if($page == "cotact") echo 'active'  ?>" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->