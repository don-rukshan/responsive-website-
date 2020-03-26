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

 <!--- Footer -->
	<?php include 'includes/footer.php'; ?>

<!--- Scripts -->
<?php include 'includes/scripts.php'; ?>
</body>
</html>