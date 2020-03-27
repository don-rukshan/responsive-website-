<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
	<!--- Navigation -->
	<?php $page = 'home';
	include 'includes/navbar.php'; ?>

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="./img/hero-bcg.jpg"></div>
			<div class="carousel-item"><img src="img/1.jpg"></div>
			<div class="carousel-item"><img src="img/3.jpg"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- Motivational quotes bar -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>“Success isn’t always about greatness. It’s about consistency. Consistent hard work gains success. Greatness will come.”</h2>
				<p class="lead">Motivation is what gets you started. Habit is what keeps you going</p><a class="btn btn-purple btn-lg" href="https://www.lifefitness.com.au/20-fitness-motivation-quotes/" target="_blank">Check more Motivational Quotes</a>
			</div>
		</div>
	</div>
	<!--- Motivational quotes bar -->



	<!--- Start Jumbotron -->
	<div class="jumbotron" style="background:black">
		<div class="container">
			<h2 class="text-center pt-5 pb-3" style="color:white">WHY ARE WE DIFFERENT ? </h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/light.png" width=200px>
						<h3 style="color:white">Boost your Fitness</h3>
						<p style="color:white">We only provide professional and practical information to customers which have been proved to be effective</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/book.png" width=200px>
						<h3 style="color:white">Mindful Assistance</h3>
						<p style="color:white">Whether it's your first time thinking of fitness or you are already a expert, we're here to assist you and answer your questions</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/cart.png" width=180px style="margin-top:23px">
						<h3 style="color:white">Reliable Shopping</h3>
						<p style="color:white">We always protect your privacy while providing our best service to make it convenient for you</p>
					</div>
				</div>
			</div>
			<!--- End Row -->
		</div>
		<!--- End Container -->
	</div>
	<!--- End Jumbotron -->




	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-3">
			<div class="col-lg-8">
				<h3 class="pb-4">Genuine Supplement Products</h3>
				<p>Dietary supplements are vitamins, minerals, herbs, and many other products. They can come as pills, capsules, powders, drinks, and energy bars. </p>
				<p>Some supplements can play an important role in health. Supplements do not have to go through the testing that drugs do.</p><a class="btn btn-purple btn-lg" href="products.php">Check More</a>
			</div>
			<div class="col-lg-4"><img class="img-fluid" src="img/product-5.jpg"></div>
		</div>
	</div>
	<!--- End Two Column Section -->


	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-3">
			<div class="col-lg-4"><img class="img-fluid" src="img/workout.png"></div>
			<div class="col-lg-8">
				<h3 class="pb-4">Customized Workout Plans</h3>
				<p>See the killer workouts that accompany thousands of articles on Fitness Lab. This includes muscle-building workouts for every body part, as well as workouts for fat loss, cardio, sports training, and plenty more! </p>
				<p>The right cue can mean everything! Read through our step-by-step directions to ensure you're doing each workout correctly every time. </p><a class="btn btn-purple btn-lg" href="workouts.php" style="margin-left:200px">Check More</a>
			</div>

		</div>
	</div>
	<!--- End Two Column Section -->



	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-3">
			<div class="col-lg-8">
				<h3 class="pb-4">Nutritious Dietary Plans</h3>
				<p>A healthy diet may help to prevent certain long-term (chronic) diseases such as heart disease, stroke and diabetes. It may also help to reduce your risk of developing some cancers and help you to keep a healthy weight. This leaflet explains the principles of a healthy diet. It is general advice for most people. The advice may be different for certain groups of people, including pregnant women, people with certain health problems or those with special dietary requirements.</p><a class="btn btn-purple btn-lg" href="dietplans.php">Check More</a>
			</div>
			<div class="col-lg-4"><img class="img-fluid" src="img/diet.jpg"></div>
		</div>
	</div>
	<!--- End Two Column Section -->





	<!--- Footer -->
	<?php include 'includes/footer.php'; ?>

	<!--- Scripts -->
	<?php include 'includes/scripts.php'; ?>
</body>

</html>