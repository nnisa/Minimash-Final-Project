<?PHP require "./login/loginheader.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>minimash</title>

  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">

  <link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">
          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">minimash</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">A platform to help communities come together and minimize food waste by sharing extra food with neighbors. Join us in helping each other and celebrate our love for food. </p>
              <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Explore more</a>
          </div>
      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">minimash</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#feature" class="smoothScroll">About</a></li>
        <li><a href="#gallery" class="smoothScroll">Neighborhood</a></li>
        <li><a href="#contact" class="smoothScroll">Share</a></li>
			<?PHP
			if (isset($_SESSION['email'])) {
				echo '        <li><a href="http://localhost/login/logout.php" class="smoothScroll">Sign out</a></li>';
			} else {
				echo '        <li><a href="http://localhost/login/main_login.php" class="smoothScroll">Sign in</a></li>';
			}
			?>

      </ul>
    </div>
  </div>
</div>


<!-- About section -->
<section id="feature" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <h2>Why minimash?</h2>
            <h4>We help you share food</h4>
          </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="feature-thumb">
          <div class="feature-icon">
             <span><i class="fa fa-cutlery"></i></span>
          </div>
          <h3>Cheaper Healthy Living </h3>
          <p>Enjoy healthy living without worrying about buying expensive grocery, rather share and receive food from neighbors.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><i class="fa fa-coffee"></i></span>
          </div>
          <h3>Community Engagement</h3>
          <p>Meet your neighbors and make new friends by celebrating the one thing everyone has in common, “Love for food”.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><i class="fa fa-bell-o"></i></span>
          </div>
           <h3>Reduce Waste</h3>
           <p>Reduce food waste by sharing your leftovers with your neighbors and contribute in making the earth a better place.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>neighborhoods</h2>
            <h4>Filter based on your location or choice of food</h4>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".Vegetables">Vegetables</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".Fruits">Fruits</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".Meat">Dairy</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".Dairy">Meat</a></li>
                    </ul>

                    <!-- iso box section -->
                     <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                     <div class="iso-box-wrapper col4-iso-box">

                     <a href="http://localhost/login/index.php">
                        <div class="iso-box Vegetables Fruits Meat col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                          </div>
                          <h3>West Village</h3>
                        </div>
                        </a>

                        <a href="http://localhost/login/index.php">
                        <div class="iso-box Vegetables Meat Dairy col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                          </div>
                          <h3>Upper West Side</h3>
                        </div>
                        </a>

                        <a href="http://localhost/login/index.php">
                        <div class="iso-box Dairy col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                          </div>
                          <h3>Upper East Side</h3>
                        </div>
                        </a>

                        <a href="http://localhost/login/index.php">
                        <div class="iso-box Vegetables col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                          </div>
                          <h3>Tribeca</h3>
                        </div>
                        </a>

                        <a href="http://localhost/login/index.php">
                        <div class="iso-box Meat col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                          </div>
                          <h3>Soho</h3>
                        </div>
                        </a>

                        <a href="http://localhost/login/index.php">
                        <div class="iso-box Fruits Meat col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                              <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                              </div>
                          <h3>Midtown</h3>
                        </div>
                        </a>

                       </div>
                    </div>
          </div>

      </div>

    </div>
  </div>
</section>

<!-- Contact section -->
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Share</h2>
                <h4>we love to share too!</h4>
            </div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					<form id="contact-form" class="form-signup" id="share" name="share" method="post" action="login/createfood.php">
						<input name="what" id="what" type="text" class="form-control" placeholder="What are you sharing today?" required>
						<input name="quantity" type="text" id="quantity" class="form-control" placeholder="What is the quantity?" required>
            <input list="neighborhoods" name="neighborhood" class="form-control" id="neighborhood" placeholder="Pick your neighborhood" required>
              <datalist id="neighborhoods">
                <option value="West Village">
                <option value="Upper West Side">
                <option value="Upper East Side">
                <option value="Tribeca">
                <option value="Soho">
                <option value="Midtown">
              </datalist>
              <input list="foodtypes" name="foodtype" class="form-control" id="foodtype" placeholder="Pick your food type" required>
              <datalist id="foodtypes">
                <option value="Vegetables">
                <option value="Fruits">
                <option value="Dairy">
                <option value="Meat">
              </datalist>
            <input name="location" id="location" type="text" class="form-control" placeholder="What is the pick up location?" required>

            <input name="pickupTime" id="pickupTime" type="text" class="form-control" placeholder="What is the pick up time?" required>
            
						<input type="submit" id="submit" class="form-control submit" class="btn btn-lg btn-primary btn-block" value="SHARE TODAY">
<!--        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Share</button>
 -->			</form>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2016 minimash<a class="designed-by" href="https://plus.google.com/+Tooplate/" target="_blank"></a></p>
      </div>  
      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>
    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>