<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<!--- Navigation -->
	<?php  $page = 'home'; include 'includes/navbar.php'; ?>

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="./img/hero-bcg.jpg"></div>
			<div class="carousel-item"><img src="img/1.jpg"></div>
			<div class="carousel-item"><img src="img/3.jpg"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>“Success isn’t always about greatness. It’s about consistency. Consistent hard work gains success. Greatness will come.”</h2>
				<p class="lead">Motivation is what gets you started. Habit is what keeps you going</p><a class="btn btn-purple btn-lg" href="https://www.lifefitness.com.au/20-fitness-motivation-quotes/" target="_blank">Check more Motivational Quotes</a>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->





	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">CREATED WITH THE BEST INFO</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-8">
				<h3 class="pb-4">Genuine Supplement Products</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="products.php">Check More</a>
			</div>
			<div class="col-lg-4"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->


	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-8">
				<h3 class="pb-4">Customized Workout Plans</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="workouts.php">Check More</a>
			</div>
			<div class="col-lg-4"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->



	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-8">
				<h3 class="pb-4">Nutritious Dietary Plans</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="dietplans.php">Check More</a>
			</div>
			<div class="col-lg-4"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->






<!--- Footer -->
	<?php include 'includes/footer.php'; ?>

<!--- Scripts -->
<?php include 'includes/scripts.php'; ?>
</body>
</html>