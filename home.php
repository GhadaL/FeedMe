<?php
session_start();
    include('db.php');
    //$_SESSION['signed_in']=true ;

    if(isset($_POST['submit'])){
      $name = $_POST['username'] ;
      $result = $conn->query("SELECT * FROM user where username='$name' ");
      $row =$result->fetch_array();
    if($_POST['username']== $row['username'] && $_POST['psw']== $row['password']){
    $_SESSION['signed_in']=true ;
    $_SESSION['username']=$_POST['username'];
    header('location: home.php');}
    else
    header('location: home.php?error');
    }

?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feed ME</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
-->
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
<!--this link added after ali division-->
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<!--debut nav-->

  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#" style="
    font-family: 'Pacifico', cursive !important;
    font-size: 34px !important;
    color: black !important;
">Feed Me</a>
	</div>

	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">

            <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Discover<span class="caret"></span></a>
				<ul class="dropdown-menu mega-dropdown-menu" style="display: none;">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Governorates</li>
							<li><a href="#">Ariana</a></li>
                            <li><a href="#">Ben Arouss</a></li>
                            <li><a href="#">Manouba</a></li>
							<li><a href="#">Sousse</a></li>
							<li><a href="#">Sfax</a></li>
              <li><a href="#">Touzer</a></li>
              <li><a href="#">Kef</a></li>
              <li><a href="#">Kbeli</a></li>
              <li><a href="#">Mahdia</a></li>
              <li><a href="#">Nabeul</a></li>

						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Restaurants</li>
							<li><a href="#">Le Duc</a></li>
              <li><a href="#">Restaurant Chez Slah</a></li>
              <li><a href="#">Dar El Jeld</a></li>
                <li><a href="#">Dar El Jeld</a></li>
                  <li><a href="#">Restaurant le Parnasse</a></li>
                <li><a href="#">Restaurant El-Walima</a></li>
							<li><a href="#"></a></li>
							<li><a href="#">Coloured Headers</a></li>
							<li><a href="#">Primary Buttons &amp; Default</a></li>
						</ul>
					</li>
<li class="col-sm-3"></li>
                    <li class="col-sm-3">
    					<ul>
							<li class="dropdown-header"><a href="list.html">Good Deals</a></li>
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item">
                                    <a href="#"><img src="img/suggestion.jpg" class="img-responsive" alt="product 1"></a>
                                    <h4><small>chicken fingers</small></h4>
                                    <button class="btn btn-primary" type="button">4.9 DT</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="img/suggestion1.jpg" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Double Beef Sandwish</small></h4>
                                    <button class="btn btn-primary" type="button">6.5 DT</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                                <div class="item active">
                                    <a href="#"><img src="img/suggestion2.jpg" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Humberger</small></h4>
                                    <button class="btn btn-primary" type="button">5 DT</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="list.html">See more suggestions  <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
				</ul>
			</li>

		</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" role="button" aria-expanded="false" onclick="document.getElementById('id01').style.display='block'">Log in </a>

        </li>

<!-- The Modal -->
<div id="id01" class="modal" style="display: none;">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="index.php" method="post">
    <div class="container" style="
    width: 100%;
">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required="">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required="">

      <button type="submit" name="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me

    </div>
    <?php
    if (isset($_GET['error'])) :  ?>
    <p style="color:red;">Invalid username or password </p>
    <?php endif;  ?>
    <div class="container" style="background-color:#f1f1f1;width: 100%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<li class="dropdown open">
          <a href="#" role="button" onclick="document.getElementById('id02').style.display='block'">Sign up</a>
          <!-- The Modal (contains the Sign Up form) -->
          <div id="id02" class="modal" style="display: none;">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal-content animate" action="index.php" method="post">

              <div class="container" style="width: 100%;">

                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name" required="">

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required="">

                <label><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required="">
                <input type="checkbox" checked="checked"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>

                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signupbtn" name="sub">Sign Up</button>
                </div>
              </div>
            </form>
          </div>

        </li>
        <li><a href="#">Become a partner</a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>

<!--fin nav-->

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Find &amp; book the best restaurants with the best price</h1>
                <hr>
                <p style="
    color: white;">Reward points are just the beginning</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Book on FeedMe and win Yummy Points !<br>
With our loyalty program, you now automatically earn points, called  "Yummy" for each booking.<br>

1 booking = 100 Yums<br>
1000 Yummys = 10% loyalty discount<br>
2000 Yummys = 25% loyalty discount!<br>
Don’t miss The FeedMe special operations to win more Yummys!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Sousse
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Sfax
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Tozeur
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Mehdia
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Tunis
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ville de
                                </div>
                                <div class="project-name">
                                    Nabeul
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How does it work ?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
    <i class="fa fa-5x fa-globe" aria-hidden="true" style="color: #921345;"></i>

                        <h3>Discover</h3>
                        <p class="text-muted">the top rated restaurants in each area</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-book" aria-hidden="true" text-primary="" style="
    color: #589442;
"></i>


                        <h3>Book</h3>
                        <p class="text-muted">directly according to your wishes</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-gift aria-hidden=" text-primary="true" style="
    color: #e14123;
"></i>
                        <h3>Benefit</h3>
                        <p class="text-muted">from exclusive offers up to - 20%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <aside class="bg-dark" id="partnerSection">
        <div class="container text-center">
            <div class="footerTfm bgLoaded"><div class="animate bounce infinite footerTfm-title">You are a restaurant owner ?</div><div class="footerTfm-content">Join FeedMe now to increase your online visibility and attract new customers</div><div class="footerTfm-link"><a href="partner.html">Discover the services and advantages for restaurants</a></div></div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="footerLinks col-xs-12 col-lg-4 text-center" id="col">
                    <div class="footerLinks-title" id="col">Discover us</div>
                    <ul class="footerLinks-list list-unstyled">
                        <li>
                          <a href="http://about.thefork.com/" target="_blank" style="color:#fec503">About</a>
                        </li><li><a href="/my-loyalty-rewarded" style="color:#fec503">Loyalty Program</a>
                        </li>
                      </ul>
                    </div>
                    <div class="footerLinks col-xs-12 col-lg-4 text-center" id="col">
                      <div class="footerLinks-title" id="col">Need help</div>
                      <ul class="footerLinks-list list-unstyled" style="color:#fec503">
                        <li>
                          <a href="contact.html" style="color:#fec503">Contact us</a>
                        </li>
                        <li>
                          <a href="/suggest" target="_blank" style="color:#fec503">Suggest a restaurant</a>
                        </li>
                        <li>
                          <a href="https://support.lafourchette.com/en_us" style="color:#fec503" target="_blank">FAQ</a>
                        </li>
                        <li>
                          <a href="/legal" style="color:#fec503">Terms and conditions</a>
                        </li>
                        <li>
                          <a href="/sitemap" style="color:#fec503">Sitemap</a>
                        </li>
                      </ul>
                    </div>
                    <div class="footerLinks col-xs-12 col-lg-4 text-center" id="col">
                      <div class="footerLinks-title" id="col">Business</div>
                      <ul class="footerLinks-list list-unstyled">
                        <li>
                          <a href="https://www.theforkmanager.com/?cc=RF_B2C_Website" style="color:#fec503" target="_blank">Restaurants: join us</a>
                        </li>
                        <li>
                          <a href="/affiliates" style="color:#fec503">Affiliate programs</a>
                        </li>
                      </ul>
                    </div>
            </div>
        </div>
    </section>
<?php
  include('footer.php');
?>

    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Theme JavaScript -->

    <script type="text/javascript" src="js/creative.js">

    </script>


    <script type="text/javascript">
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });

    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

<<<<<<< HEAD
</body>
</html>
=======










</body></html>
>>>>>>> 2b9d0cadbb3038f3f4b5bc49c2e25f006a6ef3d4
