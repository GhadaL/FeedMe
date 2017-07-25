<?php
session_start();
    include('db.php');

    if(isset($_POST['submit'])){
      $name = $_POST['username'] ;
      $result = $db->query("SELECT * FROM user where username='$name' ");
      $row =$result->fetch_array();
    if($_POST['username']== $row['username'] && $_POST['psw']== $row['password']){
    $_SESSION['signed_in']=true ;
    $_SESSION['username']=$_POST['username'];
    header('location: home.php');}
    else
    header('location: home.php?error');

    }
    include('head.php');
    include('nav.php');
?>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Find &amp; book the best restaurants with the best price</h1>
                <hr>
                <p style="
    color: white;">Reward pointsare just thebeginning…</p>
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

    <aside class="bg-dark ">

    <div class="text-center moto-widget moto-widget-row row-fixed moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="mama" data-draggable-disabled="">

        <div class="container-fluid">
            <div class="row" data-container="container">


                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-bgcolor-class="" data-container="container">

    <div class="moto-widget moto-widget-container moto-container_footer_5915b35f1" data-widget="container" data-container="container" data-css-name="moto-container_footer_5915b35f1">


  <p class="moto-text_system_7">
    <span class="moto-color5_5 " style="font-family: 'Archivo Black', sans-serif;font-family: 'Chonburi', cursive;">FEED ME</span>
  </p>




    <div data-widget-id="wid__text__5975b8a3a9f2b" class="moto-widget moto-widget-text moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto " data-widget="text" data-preset="default" data-spacing="aama" data-animation="">
        <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><span class="moto-color5_5">Address:</span> 15, Avenue de Carthage</p><p class="moto-text_system_13"><span class="moto-color5_5">Email:</span> <a data-action="mail" class="moto-link" href="">feed_me@feedme.com</a></p></div>
    </div>








    </div>









    </div><div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container">

    <div class="moto-widget moto-widget-container moto-container_footer_5915b3c12" data-widget="container" data-container="container" data-css-name="moto-container_footer_5915b3c12" data-draggable-disabled="">


    <div data-widget-id="wid__text__5975b8a3aa3d2" class="moto-widget moto-widget-text moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
        <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7"><span class="moto-color5_5" style="font-family: 'Archivo Black', sans-serif;font-family: 'Chonburi', cursive;">OUR MENU</span></p></div>
    </div>








    <div data-widget-id="wid__text__5975b8a3aa8b6" class="moto-widget moto-widget-text moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto " data-widget="text" data-preset="default" data-spacing="aama" data-animation="">
        <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a data-action="page" data-id="12" class="moto-link" href="/burgers/">BURGERS</a>&nbsp;&nbsp; /&nbsp;&nbsp; <a data-action="page" data-id="11" class="moto-link" href="/pizzas/">PIZZAS</a>&nbsp;&nbsp; /&nbsp;&nbsp; <a data-action="page" data-id="14" class="moto-link" href="/tosts/">TOASTS</a>&nbsp;&nbsp; /&nbsp;&nbsp; <a data-action="page" data-id="15" class="moto-link" href="/salads/">SALADS</a> &nbsp; / &nbsp; <a data-action="page" data-id="13" class="moto-link" href="/drinks/">DRINKS</a> &nbsp; / &nbsp; <a data-action="page" data-id="16" class="moto-link" href="/desserts/">DESSERTS</a></p></div>
    </div>








    </div>









    </div><div class="moto-widget moto-widget-row__column moto-cell col-sm-5" data-widget="row.column" data-bgcolor-class="" data-container="container">

    <div data-widget-id="wid__text__5975b8a3ad453" class="moto-widget moto-widget-text moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
        <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7"><span class="moto-color5_5" style="font-family: 'Archivo Black', sans-serif;font-family: 'Chonburi', cursive;">NEWSLETTER</span></p></div>
    </div>













    <div data-widget-id="wid__contact_form__5975b8a3ae5c0" class="moto-widget moto-widget-contact_form moto-preset-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-preset="3" data-widget="contact_form" data-spacing="aasa">
        <div ng-controller="widget.ContactForm.Controller" ng-init="hash = '1@xGha4v8Zqz3Wqr/ra4nWRnq1ZmQR5zTFWKhNrpMHYlFbmnkRce2KJ+OLfmt3BGmohSoZksMWnG/GAAPIPZZQpol4pcFCCu2J7BRNLjqtQoKMLq44kDx8mNNGmcyteW8Tw4EB+/3Bl6MhN7U8fipZjl5e89JBghZ57dYGhENX5Xs='">

            <form class="moto-widget-contact_form-form ng-pristine ng-invalid ng-invalid-required" role="form" name="contactForm" ng-submit="submit()" novalidate="">
                <div ng-show="sending" class="contact-form-loading ng-hide"></div>





                            <div class="moto-widget-contact_form-group">
                                <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Your Email *" ng-blur="validate('email')" required="" ng-model-options="{ updateOn: 'blur' }" name="email" id="field_email" ng-model="message.email">



                <div class="moto-widget-contact_form-buttons" style="margin-top:20px">


                    <div class="moto-widget moto-widget-button moto-preset-default moto-align-left" data-preset="default" data-align="left">
                        <a ng-click="submit();" class="moto-widget-button-link moto-size-small" data-size="small"><span class="fa moto-widget-theme-icon"></span><span class="moto-widget-button-label">SUBSCRIBE</span></a>
                    </div>
                    <button type="submit" class="hidden"></button>


                </div>


        </div></form>
    </div></div>



            </div>
        </div>
    </div>
  </div></aside>

  <div class="container">
              <div class="row text-center" style="margin-top:20px">
                  <div class="col-md-4">
                      <span class="copyright">Copyright © Feed Me 2017</span>
                  </div>
                  <div class="col-md-4">
                      <ul class="list-inline social-buttons">
                          <li><a href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="list-inline quicklinks">
                          <li><a href="#">Privacy Policy</a>
                          </li>
                          <li><a href="#">Terms of Use</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

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
=======



>>>>>>> d270adb146b351ef9af41f6e75a12c83add34a71
</body></html>
