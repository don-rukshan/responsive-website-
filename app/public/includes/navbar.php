	<!--- Navigation -->
	<nav class="navbar navbar-expand-md fixed-top" style="background-color:rgb(24, 43, 43)">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="store logo"/></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button" style="background:black"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php" style="color:white">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='products'){echo 'active';}?>"  href="products.php" style="color:white">Products</a>
					</li>   
					<li class="nav-item">
						<a class="nav-link <?php if($page=='workouts'){echo 'active';}?>" href="workouts.php" style="color:white">Workouts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='dietplans'){echo 'active';}?>" href="dietplans.php" style="color:white">Diet Plans</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='contact-us'){echo 'active';}?>" href="contact-us.php" style="color:white">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->