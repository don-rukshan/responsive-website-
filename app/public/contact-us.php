<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<!--- Navigation -->
	<?php include 'includes/navbar.php'; ?>


<div class="row mt-5">
<div class="col-12 text-center mt-5">
<h2> Contact Us </h2>
</div>
</div>

 



	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<h3 class="pb-4">Founder's Message</h3>
				<p class="pb-4 text-justify" >Our Certified Fitness Professionals provide personalised service to each member to prepare tailor-made fitness schedules that efficiently and effectively achieve pre-determined fitness objectives. Our goal is to ensure you reach yours by enabling professional athletes, athletes aspiring to become professionals as well as sportsmen and sportswomen to optimise performance by building targeted muscle groups specific to their chosen field of activity or achieving precise cardio-vascular, body-mass index together with wellness objectives.</p>
        <p class="pb-4 text-justify">I do look forward to the day that you will join many others of our Fitness Lab Family who confidently say, ‘This is My Best Life’!”</p>
        <h3 class="text-right">Stay Healthy !</h3>
			</div>
      <div class="col-lg-6">
        <div id="stylized" class="myform">
	<link href="contact.css" rel="stylesheet">
      <form id="form1" id="form1" action="mail.php" method="POST">
        <label
          >Name
          <span class="small">Add your name</span>
        </label>
        <input type="text" name="name"/>
        <label
          >Email
          <span class="small">Enter a Valid Email</span>
        </label>
        <input type="text" name="email" />
        <label
          >Phone
          <span class="small">Add a Phone Number</span>
        </label>
        <input type="text" name="phone" />
        <br />
        <br />

        <label
          >Message
          <span class="small">Type Your Message</span>
        </label>
        <textarea name="message" rows="6" cols="34"></textarea><br />
        <button type="submit" value="Send" style="margin:20px 50px 5px 125px;">
          Submit
        </button>
        <div class="spacer"></div>
      </form>
    </div>
<div class="row mt-5">
</div>
    
    
    
    </div>
		</div>
	</div>
	<!--- End Two Column Section -->

 <!--- Footer -->
	<?php include 'includes/footer.php'; ?>

<!--- Scripts -->
<?php include 'includes/scripts.php'; ?>
</body>
</html>