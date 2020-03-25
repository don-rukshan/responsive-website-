<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<!--- Navigation -->
	<?php include 'includes/navbar.php'; ?>


<link rel="stylesheet" href="products.css" />


   <!--hero-->
    <header class="hero">
      <div class="banner">
								<h1 class="banner-title col-12 text-center mt-1">our supplement collection</h1>  
								<button class="banner-btn">shop now</button>
      </div>
    </header>
				<!--end of hero-->
				
    <!--products-->
<section class="products">
      <div class="section-title">
        <h2>our products</h2>
      </div>
      <div class="products-center">
        <!--single product-->
        <article class="product">
          <div class="img-container">
            <img
              src="./img/product-1.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to bag
            </button>
          </div>
          <h3>Proteins</h3>
          <h4>$80 Upwards</h4>
        </article>
        <!--end of single product-->

        <!--single product-->
        <article class="product">
          <div class="img-container">
            <img
              src="./img/product-2.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to bag
            </button>
          </div>
          <h3>Mass Gainers</h3>
          <h4>$95 Upwards</h4>
        </article>
        <!--end of single product-->

        <!--single product-->
        <article class="product">
          <div class="img-container">
            <img
              src="./img/product-3.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to bag
            </button>
          </div>
          <h3>Pre-Workouts</h3>
          <h4>$25 Upwards</h4>
        </article>
        <!--end of single product-->

        <!--single product-->
        <article class="product">
          <div class="img-container">
            <img
              src="./img/product-4.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to bag
            </button>
          </div>
          <h3>Fat Burners</h3>
          <h4>$30 Upwards</h4>
        </article>
        <!--end of single product-->

        <!--single product-->
        <article class="product">
          <div class="img-container">
            <img
              src="./img/product-5.jpg"
              alt="product"
              class="product-img"
            />
            <button class="bag-btn" data-id="1">
              <i class="fas fa-shopping-cart"></i>
              add to bag
            </button>
          </div>
          <h3>Amino</h3>
          <h4>$50 Upwards</h4>
        </article>
        <!--end of single product-->
      </div>
    </section>
    <!-- end of products-->






 <!--- Footer -->
	<?php include 'includes/footer.php'; ?>

<!--- Scripts -->
<?php include 'includes/scripts.php'; ?>
</body>
</html>