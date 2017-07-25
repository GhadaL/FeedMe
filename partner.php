<?php
session_start();
    include('db.php');


    if(isset($_POST['sub'])){
      $name = $_POST['name'] ;
      $password = $_POST['pass'] ;
      $query = "INSERT INTO user VALUES (NULL,'$name','$password',NULL,NULL,NULL,NULL,NULL)";
      $result = mysqli_query($conn,$query);
      $_SESSION['username']=$_POST['name'];
    }

    if(isset($_POST['submit'])){
      $name = $_POST['username'] ;
      $pass = $_POST['psw'];
      $result = mysqli_query($conn,"SELECT username,password FROM user where username='$name' and password='$pass'");
    if(mysqli_num_rows($result) > 0){
    $_SESSION['signed_in']=true ;
    $_SESSION['username']=$_POST['username'];
    header('location: index.php');
    }
    else
    header('location: home.php?error');
    }

include("nav.php");

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
   <!--  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />

     <!-- Custom Fonts -->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
     <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">

     <!-- Plugin CSS -->
     <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

     <!-- Theme CSS -->
     <link href="css/creative.css" rel="stylesheet">




         <link rel="icon" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon-16x16.png" sizes="16x16">
         <link rel="icon" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon-32x32.png" sizes="32x32">
         <link rel="icon" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon-48x48.png" sizes="48x48">
         <link rel="icon" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon-64x64.png" sizes="64x64">
         <link rel="icon" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon-128x128.png" sizes="128x128">
         <link href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/assets/img/common/favicon.ico" rel="shortcut icon">


                 <!--[if lt IE 10]>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
             <script src="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/js/vendor/placeholders.min.js"></script>
         <![endif]-->


              <!-- Google Tag Manager -->
             <script type="text/javascript" src="https://pi.pardot.com/pd.js"></script><script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflyiGtkL/www-widgetapi.js" async=""></script><script src="https://connect.facebook.net/signals/config/279817275686172?v=2.7.18" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//static.hotjar.com/c/hotjar-152040.js?sv=5"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-T2C7KF"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
             new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
             j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
             'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
             })(window,document,'script','dataLayer','GTM-T2C7KF');</script>
             <!-- End Google Tag Manager -->


         <script src="//cdn.optimizely.com/js/8463521960.js"></script><link rel="alternate" hreflang="fr" href="https://www.theforkmanager.com/fr/">
 <link rel="alternate" hreflang="es" href="https://www.theforkmanager.com/es/">
 <link rel="alternate" hreflang="it" href="https://www.theforkmanager.com/it/">
 <link rel="alternate" hreflang="fr-CH" href="https://www.theforkmanager.com/fr_ch/">
 <link rel="alternate" hreflang="fr-BE" href="https://www.theforkmanager.com/fr_be/">
 <link rel="alternate" hreflang="nl-BE" href="https://www.theforkmanager.com/nl_be/">
 <link rel="alternate" hreflang="sv" href="https://www.theforkmanager.com/sv/">
 <link rel="alternate" hreflang="da" href="https://www.theforkmanager.com/da/">
 <link rel="alternate" hreflang="pt" href="https://www.theforkmanager.com/pt-pt/">
 <link rel="alternate" hreflang="pt-BR" href="https://www.theforkmanager.com/pt-br/">
 <link rel="alternate" hreflang="nl" href="https://www.theforkmanager.com/nl/">
 <link rel="alternate" hreflang="en" href="https://www.theforkmanager.com/">

 <!-- This site is optimized with the Yoast SEO plugin v5.0.2 - https://yoast.com/wordpress/plugins/seo/ -->
 <title>Increase your restaurant’s revenue simply and effectively</title>
 <meta name="description" content="Attract new customers -&nbsp;Manage your reservations more easily -&nbsp;Create long-lasting customer relationships">
 <link rel="canonical" href="https://www.theforkmanager.com/">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="Increase your restaurant’s revenue simply and effectively">
 <meta property="og:description" content="Attract new customers -&nbsp;Manage your reservations more easily -&nbsp;Create long-lasting customer relationships">
 <meta property="og:url" content="https://www.theforkmanager.com/">
 <meta property="og:site_name" content="ElTenedor">
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:description" content="Attract new customers -&nbsp;Manage your reservations more easily -&nbsp;Create long-lasting customer relationships">
 <meta name="twitter:title" content="Increase your restaurant’s revenue simply and effectively">
 <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.theforkmanager.com\/","name":"ElTenedor","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.theforkmanager.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
 <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.theforkmanager.com\/","sameAs":[],"@id":"#organization","name":"LA FOURCHETTE SAS","logo":"https:\/\/www.theforkmanager.com\/wp-content\/uploads\/2015\/11\/Logo-LaFourchette-horizontal-fond-transparent-1.png"}</script>
 <!-- / Yoast SEO plugin. -->

 <link rel="dns-prefetch" href="//ajax.googleapis.com">
 <link rel="dns-prefetch" href="//code.jquery.com">
 <link rel="dns-prefetch" href="//www.youtube.com">
 <link rel="dns-prefetch" href="//fonts.googleapis.com">
 <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
 <link rel="dns-prefetch" href="//s.w.org">
 <link rel="alternate" type="application/rss+xml" title="ElTenedor » Feed" href="https://www.theforkmanager.com/feed/">
 <link rel="stylesheet" id="google-font-css" href="//fonts.googleapis.com/css?family=Raleway%3A700%2C300%2C600%2C400" type="text/css" media="screen">
 <link rel="stylesheet" id="font-awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css" media="screen">
 <link rel="stylesheet" id="Style-css" href="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/style.css?r=1.6.1" type="text/css" media="screen">
 <script type="text/javascript" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/script.js"></script>
 <meta name="generator" content="WPML ver:3.7.1 stt:65,66,12,39,1,4,27,44,43,2,67,52;">
 <script type="text/javascript">
 (function(url){
 	if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
 	var addEvent = function(evt, handler) {
 		if (window.addEventListener) {
 			document.addEventListener(evt, handler, false);
 		} else if (window.attachEvent) {
 			document.attachEvent('on' + evt, handler);
 		}
 	};
 	var removeEvent = function(evt, handler) {
 		if (window.removeEventListener) {
 			document.removeEventListener(evt, handler, false);
 		} else if (window.detachEvent) {
 			document.detachEvent('on' + evt, handler);
 		}
 	};
 	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
 	var logHuman = function() {
 		var wfscr = document.createElement('script');
 		wfscr.type = 'text/javascript';
 		wfscr.async = true;
 		wfscr.src = url + '&r=' + Math.random();
 		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
 		for (var i = 0; i < evts.length; i++) {
 			removeEvent(evts[i], logHuman);
 		}
 	};
 	for (var i = 0; i < evts.length; i++) {
 		addEvent(evts[i], logHuman);
 	}
 })('//www.theforkmanager.com/?wordfence_logHuman=1&hid=2C159824911C3CCA21EFA95C207270E7');
 </script><script type="text/javascript">var ajaxurl = 'https://www.theforkmanager.com/wp-admin/admin-ajax.php';</script>

             <style type="text/css">.backpack.dropzone {
   font-family: 'SF UI Display', 'Segoe UI';
   font-size: 15px;
   text-align: center;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   width: 250px;
   height: 150px;
   font-weight: lighter;
   color: white;
   will-change: right;
   z-index: 2147483647;
   bottom: 20%;
   background: #333;
   position: fixed;
   user-select: none;
   transition: left .5s, right .5s;
   right: 0px; }
   .backpack.dropzone .animation {
     height: 80px;
     width: 250px;
     background: url("https://sxt.cdn.skype.com/assets/dropzone/hoverstate.png") left center; }
   .backpack.dropzone .title::before {
     content: 'Save to'; }
   .backpack.dropzone.closed {
     right: -250px; }
   .backpack.dropzone.hover .animation {
     animation: sxt-play-anim-hover 0.91s steps(21);
     animation-fill-mode: forwards;
     background: url("https://sxt.cdn.skype.com/assets/dropzone/hoverstate.png") left center; }

 @keyframes sxt-play-anim-hover {
   from {
     background-position: 0px; }
   to {
     background-position: -5250px; } }
   .backpack.dropzone.saving .title::before {
     content: 'Saving to'; }
   .backpack.dropzone.saving .animation {
     background: url("https://sxt.cdn.skype.com/assets/dropzone/saving_loop.png") left center;
     animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

 @keyframes sxt-play-anim-saving {
   100% {
     background-position: -14750px; } }
   .backpack.dropzone.saved .title::before {
     content: 'Saved to'; }
   .backpack.dropzone.saved .animation {
     background: url("https://sxt.cdn.skype.com/assets/dropzone/saved.png") left center;
     animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

 @keyframes sxt-play-anim-saved {
   100% {
     background-position: -5000px; } }
 </style><script async="" src="https://script.hotjar.com/modules-6d735a6d66d71e4b5154e075915a0fc8.js"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style><script type="text/javascript" src="https://pi.pardot.com/analytics?ver=3&amp;visitor_id=&amp;pi_opt_in=&amp;campaign_id=1053&amp;account_id=152831&amp;title=Increase%20your%20restaurant%E2%80%99s%20revenue%20simply%20and%20effectively&amp;url=https%3A%2F%2Fwww.theforkmanager.com%2F%3Fcc%3DRF_B2C_Website&amp;referrer=https%3A%2F%2Fwww.facebook.com%2F"></script><script type="text/javascript" async="" src="//www.theforkmanager.com/?wordfence_logHuman=1&amp;hid=2C159824911C3CCA21EFA95C207270E7&amp;r=0.14732990091979659"></script></head>

     <body>
         <!-- Google Tag Manager (noscript) -->
 <noscript>&lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2C7KF"
 height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
 <!-- End Google Tag Manager (noscript) -->

         <header class="home__hd country_en" style="height: 298.48px;">



                         <div id="videoWrapper" style="width: 1349px; height: 298.48px; visibility: visible;">
                 <iframe width="1200" height="674" id="youtubeplayer" src="https://www.youtube.com/embed/Cir2VsfFShQ?enablejsapi=1&amp;autoplay=1&amp;loop=1&amp;rel=0&amp;showinfo=0&amp;controls=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" style="top: -229.26px; left: 0px; width: 1349px; height: 757px;"></iframe>
                 <!--iframe src="" data-id="144385588" id="vimeoplayer" width="1200" height="674" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen ></iframe-->
                 <div class="no_click"></div>
             </div>
             <div id="videoBg__cn" style="width: 1349px; height: 298.48px; display: none;">
                 <div id="videoBg__hd" style="top: -229.26px; left: 0px; width: 1349px; height: 757px;"></div>
             </div>
             <div class="head__mask"></div>
             <div class="info__cn-txt" style="top: 1.74px;">
                 <div class="row row__large video__box1">
                     <div class="col__4">
                         <h2 data-go="box__1"><strong>ATTRACT</strong> <span>NEW CUSTOMERS</span></h2>
                     </div>
                     <div class="col__4">
                         <h2 data-go="box__2"><strong>MANAGE</strong> <span>YOUR BOOKINGS MORE EASILY</span></h2>
                     </div>
                     <div class="col__4">
                         <h2 data-go="box__3"><strong>RETAIN</strong> <span>YOUR CUSTOMERS</span></h2>
                     </div>
                 </div>

                 <div class="row row__large video__box2">
                     <p>With Feed Me, increase your restaurant's revenue simply and effectively</p>


                     <p class="sub__p">Increase your revenue by 25% with Feed Me : <a href="#">check your Return on Investment</a></p>


                     <a href="#" class="Btn-normal type__action">No-obligation trial</a>
                 </div>
             </div>

             </header>

 <main class="wrapper home__cn">
 	<section class="box__1">
 			<div class="row row__large">
 				<div class="col__6 box__cn">
 					<div class="box__txt">
 						<h2><strong>Attract</strong> new customers</h2>
 <p>Do you dream about seeing your restaurant full every day, both at lunchtime and at dinner? Even reselling your tables for the same service?</p>
 <p>TheFork provides you with all the tools you need to increase your online visibility and attract new customers who would never have heard about your restaurant otherwise.</p>
 <p>When you join Feed Me, your restaurant will not only benefit from TheFork and TripAdvisor's visibility, but you can also increase revenue generated by your own website and social networks like Facebook.</p>
 <p><a class="Btn-normal" href="/features/">Learn more</a></p>
 					</div>
 				</div>
 				<div class="col__6 box__cn box__img">
 					<img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/home-box12.png" width="775" alt="">
 					<p>“Since we started working with Feed Me, bookings have increased exponentially by around 80%, and this is just increasing every week.”  – Slora</p>
 				</div>
 			</div>
 		</section>

 		<section class="box__2">
 			<div class="row row__large">
 				<div class="col__6 box__cn box__img">
 					<img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/home-box2.png" width="775" alt="">
 					<p>“I noticed an 80% increase in my occupancy rate.”  – Canarute Trattoria</p>
 				</div>
 				<div class="col__6 box__cn">
 					<div class="box__txt">
 						<h2><strong>Manage</strong> your booking more easily</h2>
 <p>Would you like to save time and have someone take your reservations on your days off, during service, or overnight?</p>
 <p>Specifically designed to meet the needs of your restaurant, TheFork Manager software manages your reservations for you, giving you the right response, tailored for your customers and staff.</p>
 <p>Managing your reservations and organizing your services has never been so easy. Your new tool is available at any time and from any location (no need to have your reservation diary attached to you at all times).</p>
 <p><a class="Btn-normal" href="/features/">Learn more</a></p>
 					</div>
 				</div>
 			</div>
 		</section>

 		<section class="box__3 box__3-en">
 			<div class="row row__large">
 				<div class="col__6 box__cn">
 					<div class="box__txt">
 						<h2><strong>Retain</strong> your customers</h2>
 <p>Do you have time to chat with all your customers? Do you remember what they told you six months ago? Would you like your customers to come back to your restaurant more regularly?</p>
 <p>with Feed Me Manager, you can remember all your customers’ preferences and keep a log of all their reservations. Allow your teams to provide a personalized service to each and every customer.</p>
 <p>It’s easy to stay in touch with your customers, or let them know about your new menu or upcoming theme evenings – keeping them coming back.</p>
 <p><a class="Btn-normal" href="/features/">Learn more</a></p>
 					</div>
 				</div>
 				<div class="col__6 box__cn box__img">
 					<img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/home-box31.png" width="775" alt="">
 					<p>“Since our restaurant was first listed on TheFork, bookings have risen by around 40% . Since we began running promotions, we have seen an increase of between 25 and 30%.”  – Les Vinyes</p>
 				</div>
 			</div>
 		</section>

 						<section class="box__4" style="background-image:url(https://www.theforkmanager.com/wp-content/uploads/2015/11/home-foto1.jpg);">
 			<div class="row">
 				<p><a href="https://www.youtube.com/watch?v=xnJF0SHnLKU" class="btn__play popup-vimeo"><i class="fa fa-play fa-2x"></i></a> Learn more about TheFork’s services with our video (3 minutes)</p>
 			</div>
 		</section>

 		<section class="box__5">
 			<div class="row">
 				<h2><strong>It’s a win-win partnership</strong>All services below are FREE: </h2>
 			</div>
 			<div class="row">
 				<div class="col__3 box__ico">
 <img src="/wp-content/uploads/2015/11/home-ico1.png" alt="" width="165" height="165"><br>
 <strong>Online visibility</strong><br>
 Publication on TheFork and TripAdvisor websites
 </div>
 <div class="col__3 box__ico">
 <img src="/wp-content/uploads/2015/11/home-ico2.png" alt="" width="165" height="165"><br>
 <strong>Your own website</strong><br>
 TheFork can provide you with your own website
 </div>
 <div class="col__3 box__ico">
 <img src="/wp-content/uploads/2015/11/home-ico3.png" alt="" width="165" height="165"><br>
 <strong>Booking engine</strong><br>
 Receive reservations from your own website or Facebook page
 </div>
 <div class="col__3 box__ico">
 <img src="/wp-content/uploads/2015/11/home-ico4.png" alt="" width="165" height="165"><br>
 <strong>TheFork Manager software</strong><br>
 Access the standard version of our reservation and customer relations management software
 </div>
 			</div>
 			<div class="row box__txt">
 				<p>You have free and unlimited access to all tools to promote your restaurant and generate more bookings. All reservations from your own website or your Facebook page are free. We only take a commission when reservations come from TheFork or TripAdvisor sites. If we’re not bringing you customers, you don’t pay anything.</p>
 <p><a class="Btn-normal" href="/features/">See all services</a> <a class="Btn-normal type__action" href="/prices/">See all rates</a></p>
 <p><a class="link" href="/return-on-investment/"> Calculate your ROI (return on investment)I</a></p>
 			</div>
 		</section>

 		<section class="box__6">
 			<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 435px;"><div class="slider__holder" style="width: 4215%; position: relative; transition-duration: 0s; transform: translate3d(-1349px, 0px, 0px) perspective(1px);"><div class="slide bx-clone" style="background-image: url(&quot;&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="true">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 						<p>“<strong>For us, working with Feed Me has been an extraordinary experience. We never imagined that we could achieve these kinds of results and attract so many people in so little time.</strong>”</p>
 <p><small>Caridad Torrens - Slora</small></p>
 					</div>
 				</div>
 	  			<div class="slide" style="background-image: url(&quot;https://www.theforkmanager.com/wp-content/uploads/2015/11/Garnacha.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="false">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 	  					<p>“We needed a portal to gain online visibility and we chose the one that gave us best quality-price-service ratio.”</p>
 <p><small> Mª DOLORES LUNA TORO&nbsp;- Garnacha Marbella&nbsp;</small></p>
 					</div>
 				</div>
 				<div class="slide" style="background-image: url(&quot;https://www.theforkmanager.com/wp-content/uploads/2015/11/JaiAli.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="true">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 						<p>“The aspect of TheFork that I really like is how it evolves over time. I’ve seen over time, how it has moved in other interesting directions in the restaurant industry, such as what we’re seeing at the moment. TheFork is clearly the leader in its sector.”</p>
 <p><small>Maria José Bustingorri&nbsp;- JAI ALAI&nbsp;</small></p>
 					</div>
 				</div>
 				<div class="slide" style="background-image: url(&quot;&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="true">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 						<p style="text-align: justify;">“I decided to publish my restaurant on TheFork to get more publicity. TheFork gives me greater visibility and a huge online presence.”</p>
 <p style="text-align: justify;"><small>Daniela Rosso - GIOIA</small></p>
 					</div>
 				</div>
 				<div class="slide" style="background-image: url(&quot;&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="true">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 						<p>“<strong>For us, working with Feed Me has been an extraordinary experience. We never imagined that we could achieve these kinds of results and attract so many people in so little time.</strong>”</p>
 <p><small>Caridad Torrens - Slora</small></p>
 					</div>
 				</div>
 			<div class="slide bx-clone" style="background-image: url(&quot;https://www.theforkmanager.com/wp-content/uploads/2015/11/Garnacha.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;" aria-hidden="true">
 	  				<div class="slide__mask"></div>
 	  				<div class="row slide__cn">
 	  					<p>“We needed a portal to gain online visibility and we chose the one that gave us best quality-price-service ratio.”</p>
 <p><small> Mª DOLORES LUNA TORO&nbsp;- Garnacha Marbella&nbsp;</small></p>
 					</div>
 				</div></div></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
 			<div id="bx-pager">
 			  <a data-slide-index="0" href="" class="active"><img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/MG_3582-copia-copia.png"></a>
 			  <a data-slide-index="1" href="" class=""><img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/Jai-Alai.png"></a>
 			  <a data-slide-index="2" href="" class=""><img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/GIOIA.png"></a>
 			  <a data-slide-index="3" href="" class=""><img src="https://www.theforkmanager.com/wp-content/uploads/2015/11/Slora1.png"></a>
 			</div>
 		</section>

 		<section class="box__7">
 			<div class="row">
 				<h2><strong>40 000</strong>partner restaurants with Feed Me Manager</h2>
 			</div>
 			<div class="row list__logo">
 							</div>
 		</section>

 		<section class="box__8 box__8-en">
 			<div class="row">
 				<h2>TheFork is a team with real people who are ready and waiting to help you</h2>
 <p>As soon as you sign up, a personal advisor will help you to make the most out of your new tools and will support you daily to get the most out of the Internet. Our team is available 7 days a week, from 9:00am to 10:00pm to manage all your requests.</p>
 				<p><a href="https://www.theforkmanager.com/contact/" class="Btn-normal">Contact us</a></p>
 			</div>
 		</section>

 		<section class="box__9">
 			<div class="row">
 				<h2>Did you know that…</h2>
 <p>Tips, trends, and shared experiences... a space specially created for you.</p>
 				<div class="row blog__home">
 					<article class="col__3">
 								<div class="Blog-item">
 									<picture class="lazyImg"><img width="361" height="361" src="https://www.theforkmanager.com/wp-content/uploads/2017/05/the-fork-12-tips-to-fill-your-restaurant-3-1-361x361.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Tips to fill your restaurant TheFork" srcset="https://www.theforkmanager.com/wp-content/uploads/2017/05/the-fork-12-tips-to-fill-your-restaurant-3-1-361x361.jpg 361w, https://www.theforkmanager.com/wp-content/uploads/2017/05/the-fork-12-tips-to-fill-your-restaurant-3-1-556x556.jpg 556w, https://www.theforkmanager.com/wp-content/uploads/2017/05/the-fork-12-tips-to-fill-your-restaurant-3-1.jpg 566w" sizes="(max-width: 361px) 100vw, 361px" style="opacity: 1;"></picture>
 									<span class="Blog-item__mask"></span>
 									<div class="Blog-item__txt">
 										<h3>TheFork tool</h3>
 										<h2>12 tips to fill your restaurant</h2>
 									</div>
 									<a href="https://www.theforkmanager.com/blog/tips-fill-restaurant/"></a>
 								</div>
 							</article><article class="col__3">
 								<div class="Blog-item">
 									<picture class="lazyImg"><img width="361" height="361" src="https://www.theforkmanager.com/wp-content/uploads/2017/02/improverating-361x361.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.theforkmanager.com/wp-content/uploads/2017/02/improverating-361x361.png 361w, https://www.theforkmanager.com/wp-content/uploads/2017/02/improverating-556x556.png 556w, https://www.theforkmanager.com/wp-content/uploads/2017/02/improverating.png 566w" sizes="(max-width: 361px) 100vw, 361px" style="opacity: 1;"></picture>
 									<span class="Blog-item__mask"></span>
 									<div class="Blog-item__txt">
 										<h3>Tips</h3>
 										<h2>How to improve your rating on TheFork</h2>
 									</div>
 									<a href="https://www.theforkmanager.com/blog/improve-rating-thefork/"></a>
 								</div>
 							</article><article class="col__3">
 								<div class="Blog-item">
 									<picture class="lazyImg"><img width="361" height="361" src="https://www.theforkmanager.com/wp-content/uploads/2016/12/ta-premium-1-361x361.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.theforkmanager.com/wp-content/uploads/2016/12/ta-premium-1-361x361.jpg 361w, https://www.theforkmanager.com/wp-content/uploads/2016/12/ta-premium-1.jpg 556w" sizes="(max-width: 361px) 100vw, 361px" style="opacity: 1;"></picture>
 									<span class="Blog-item__mask"></span>
 									<div class="Blog-item__txt">
 										<h3>TheFork tool</h3>
 										<h2>TripAdvisor Premium for Restaurants</h2>
 									</div>
 									<a href="https://www.theforkmanager.com/blog/tripadvisor-premium-restaurants/"></a>
 								</div>
 							</article><article class="col__3">
 								<div class="Blog-item">
 									<picture class="lazyImg"><img width="361" height="361" src="https://www.theforkmanager.com/wp-content/uploads/2016/05/eltenedor-gestion-de-restaurantes-cinco-indispensables-361x361.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.theforkmanager.com/wp-content/uploads/2016/05/eltenedor-gestion-de-restaurantes-cinco-indispensables-361x361.jpg 361w, https://www.theforkmanager.com/wp-content/uploads/2016/05/eltenedor-gestion-de-restaurantes-cinco-indispensables.jpg 556w" sizes="(max-width: 361px) 100vw, 361px" style="opacity: 1;"></picture>
 									<span class="Blog-item__mask"></span>
 									<div class="Blog-item__txt">
 										<h3>Tips</h3>
 										<h2>5 essential aspects in restaurant management</h2>
 									</div>
 									<a href="https://www.theforkmanager.com/blog/restaurant-management-dont-forget-these-essential-aspects/"></a>
 								</div>
 							</article>				</div>
 				<p><a href="https://www.theforkmanager.com/blog/" class="Btn-normal">Visit the blog</a></p>
 			</div>
 		</section>
 </main>




 <div class="Form-signupnow type__page country_en">
 	<div class="row">
 		<h2><span>Join over 40 000</span> restaurants already using TheFork<strong>- Try TheFork without any commitment -</strong></h2>
 	</div>
 	<div class="row">
 		<div class="iframe-pardot form__holder">
 			<iframe src="https://go.pardot.com/l/151831/2016-10-03/6n4gkr?cc=RF_B2C_Website_20170725&amp;_ga=2.83191186.528877533.1500974485-1688389435.1500974485" id="pardot-form" width="100%" height="310" type="text/html" frameborder="0" allowtransparency="true" scrolling="no" style="border: 0px; overflow: hidden; height: 350px;"></iframe>
 		</div>
 	</div>
 </div>


 	<footer>
 		<div class="top__ft">
 			<div class="row">
 				<div class="col__6 breadcrumb__cn">
 		    		<nav class="breadcrumb"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span class="breadcrumb_last">Accueil</span></span></nav>		    	</div>
 				<div class="col__4 box_tlf">
 										<a href="tel:+33 1 83 77 71 77" class="num__phone" target="_blank"><i class="fa fa-phone"></i>+33 (0)1 83 77 71 77</a>
 									</div>
 				<div class="col__2 Box-lang">

 <div class="wpml-ls-sidebars-footer-language wpml-ls wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown" id="lang_sel">
 	<ul>

 		<li tabindex="0" class="wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-last-item wpml-ls-item-legacy-dropdown">
 			<a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle lang_sel_sel icl-en"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="en" title="Other countries"><span class="wpml-ls-native icl_lang_sel_native">Other countries</span><i class="fa fa-angle-up"></i><span class="arrow"></span></a>

 			<ul class="wpml-ls-sub-menu">

 					<li class="icl-fr wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr wpml-ls-first-item">
 						<a href="https://www.theforkmanager.com/fr/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="fr" title="France"><span class="wpml-ls-native icl_lang_sel_native">France</span></a>
 					</li>


 					<li class="icl-es wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-es">
 						<a href="https://www.theforkmanager.com/es/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="es" title="España"><span class="wpml-ls-native icl_lang_sel_native">España</span></a>
 					</li>


 					<li class="icl-it wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-it">
 						<a href="https://www.theforkmanager.com/it/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png" alt="it" title="Italia"><span class="wpml-ls-native icl_lang_sel_native">Italia</span></a>
 					</li>


 					<li class="icl-fr_ch wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr_ch">
 						<a href="https://www.theforkmanager.com/fr_ch/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr_ch.png" alt="fr_ch" title="Suisse (Français)"><span class="wpml-ls-native icl_lang_sel_native">Suisse (Français)</span></a>
 					</li>


 					<li class="icl-fr_be wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr_be">
 						<a href="https://www.theforkmanager.com/fr_be/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr_be.png" alt="fr_be" title="Belgique (Français)"><span class="wpml-ls-native icl_lang_sel_native">Belgique (Français)</span></a>
 					</li>


 					<li class="icl-nl_be wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-nl_be">
 						<a href="https://www.theforkmanager.com/nl_be/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/nl_be.png" alt="nl_be" title="België (Dutch)"><span class="wpml-ls-native icl_lang_sel_native">België (Dutch)</span></a>
 					</li>


 					<li class="icl-sv wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-sv">
 						<a href="https://www.theforkmanager.com/sv/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/sv.png" alt="sv" title="Sverige"><span class="wpml-ls-native icl_lang_sel_native">Sverige</span></a>
 					</li>


 					<li class="icl-da wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-da">
 						<a href="https://www.theforkmanager.com/da/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/da.png" alt="da" title="Danmark"><span class="wpml-ls-native icl_lang_sel_native">Danmark</span></a>
 					</li>


 					<li class="icl-pt-pt wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-pt-pt">
 						<a href="https://www.theforkmanager.com/pt-pt/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-pt.png" alt="pt-pt" title="Portugal"><span class="wpml-ls-native icl_lang_sel_native">Portugal</span></a>
 					</li>


 					<li class="icl-pt-br wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-pt-br">
 						<a href="https://www.theforkmanager.com/pt-br/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-br.png" alt="pt-br" title="Brasil"><span class="wpml-ls-native icl_lang_sel_native">Brasil</span></a>
 					</li>


 					<li class="icl-nl wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-nl">
 						<a href="https://www.theforkmanager.com/nl/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/nl.png" alt="nl" title="Nederland"><span class="wpml-ls-native icl_lang_sel_native">Nederland</span></a>
 					</li>

 							</ul>

 		</li>

 	</ul>
 </div>				</div>
 			</div>
 		</div>
 		<div class="footer__cn">
 			<div class="row col-invert">
 				<div class="col__2 footer__user">
 					<nav class="breadcrumb"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span class="breadcrumb_last">Accueil</span></span></nav>
 																<a href="tel:+33 1 83 77 71 77" class="num__phone" target="_blank"><i class="fa fa-phone"></i>+33 (0)1 83 77 71 77</a>

 										<a href="/registration/" class="Btn-normal">Registration</a>
 					<a href="https://login.theforkmanager.com/login" class="Btn-normal type__black">Login</a>
 				</div>
 				<div class="col__4 footer__post">
 					<strong>Latest Articles</strong>
 					<ul class="blog__list--ft">
 						<li><a href="https://www.theforkmanager.com/blog/tips-fill-restaurant/"><i class="fa fa-circle"></i> 12 tips to fill your restaurant</a></li><li><a href="https://www.theforkmanager.com/blog/improve-rating-thefork/"><i class="fa fa-circle"></i> How to improve your rating on TheFork</a></li><li><a href="https://www.theforkmanager.com/blog/tripadvisor-premium-restaurants/"><i class="fa fa-circle"></i> TripAdvisor Premium for Restaurants</a></li><li><a href="https://www.theforkmanager.com/blog/restaurant-management-dont-forget-these-essential-aspects/"><i class="fa fa-circle"></i> 5 essential aspects in restaurant management</a></li><li><a href="https://www.theforkmanager.com/blog/shows-becoming-less-frequent/"><i class="fa fa-circle"></i> No-Shows becoming less frequent</a></li><li><a href="https://www.theforkmanager.com/blog/double-your-tables-and-increase-your-restaurants-turnover/"><i class="fa fa-circle"></i> Double your tables and increase your restaurant’s turnover</a></li>					</ul>
 				</div>
 				<div class="col__2 footer__nav">
 					<strong>Navigation</strong>
 					<ul>
 						<li id="menu-item-9853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9853"><a href="https://www.theforkmanager.com/features/">Software and Services</a></li>
 <li id="menu-item-9852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9852"><a href="https://www.theforkmanager.com/prices/">Plans &amp; Prices</a></li>
 <li id="menu-item-9854" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9854"><a href="https://www.theforkmanager.com/our-customers/">Testimonials</a></li>
 <li id="menu-item-9850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9850"><a href="https://www.theforkmanager.com/blog/">Blog</a></li>
 <li id="menu-item-9851" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9851"><a href="https://www.theforkmanager.com/contact/">Contact</a></li>
 					</ul>
 				</div>
 				<div class="col__4 footer__sol">
 					<strong>Services</strong>
 					<ul>
 						<li id="menu-item-9855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9855"><a href="https://www.theforkmanager.com/features/management-customer-retention-tools-for-restaurants/">Management and customer retention tools for restaurants</a></li>
 <li id="menu-item-9856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9856"><a href="https://www.theforkmanager.com/features/restaurant-reservation-management-software-thefork-manager/">TheFork Manager –  restaurant reservation management software</a></li>
 <li id="menu-item-9857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9857"><a href="https://www.theforkmanager.com/features/free-website-restaurants/">TheFork offers a website to all its partner restaurants</a></li>
 <li id="menu-item-9858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9858"><a href="https://www.theforkmanager.com/features/reservation-button-on-your-own-website/">Your reservation button on your own website</a></li>
 <li id="menu-item-9859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9859"><a href="https://www.theforkmanager.com/features/restaurant-publish-thefork/">Your restaurant published on TheFork</a></li>
 <li id="menu-item-9860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9860"><a href="https://www.theforkmanager.com/features/benefits-tripadvisor/">Your reservation button on TripAdvisor</a></li>
 					</ul>
 				</div>
 			</div>
 			<div class="row">
 				<div class="col__12">
 					<div class="btn__ft">
 						<span>
 							<a href="/blog/#newsForm" class="Btn-normal type__action">Receive our Newsletter</a>
 							<a href="http://www.thefork.com/" class="Btn-normal type__black">Book through TheFork</a>
 						</span>
 						<span>






 													</span>
 					</div>
 					<p class="credit__ft">
 						©  2017 La Fourchette SAS – All rights reserved<span>·</span>
 						<a href="https://www.theforkmanager.com/legal-information/">Legal information</a><span>·</span>
 						<a href="https://www.theforkmanager.com/cookie-policy/">Cookie Policy</a>__
 					</p>
 				</div>
 			</div>
 		</div>
 	</footer>

 	<div class="avisoCookies">
 		<div class="row Cookie_txt">
 		    Our website uses cookies to help provide you with the best experience. By continuing to browse the site, you are agreeing to our <a href="https://www.theforkmanager.com/cookie-policy/">use of cookies.</a>		    <a href="#" class="accept-ck">ok</a>
 		</div>
 	</div>

 	<div class="Footer-bar animated fadeOutDown" data-wow-delay="0.8s">

 		<div class="row bar__info">
 			<div class="col__10">
 				<a href="tel:+33 1 83 77 71 77" class="bar__phone" target="_blank"><i class="fa fa-phone"></i>+33 (0)1 83 77 71 77</a>
 			</div>
 			<div class="col__2 Box-lang">

 <div class="wpml-ls-sidebars-footer-language wpml-ls wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown" id="lang_sel">
 	<ul>

 		<li tabindex="0" class="wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-last-item wpml-ls-item-legacy-dropdown">
 			<a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle lang_sel_sel icl-en"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="en" title="Other countries"><span class="wpml-ls-native icl_lang_sel_native">Other countries</span><i class="fa fa-angle-up"></i><span class="arrow"></span></a>

 			<ul class="wpml-ls-sub-menu">

 					<li class="icl-fr wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr wpml-ls-first-item">
 						<a href="https://www.theforkmanager.com/fr/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="fr" title="France"><span class="wpml-ls-native icl_lang_sel_native">France</span></a>
 					</li>


 					<li class="icl-es wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-es">
 						<a href="https://www.theforkmanager.com/es/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="es" title="España"><span class="wpml-ls-native icl_lang_sel_native">España</span></a>
 					</li>


 					<li class="icl-it wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-it">
 						<a href="https://www.theforkmanager.com/it/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png" alt="it" title="Italia"><span class="wpml-ls-native icl_lang_sel_native">Italia</span></a>
 					</li>


 					<li class="icl-fr_ch wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr_ch">
 						<a href="https://www.theforkmanager.com/fr_ch/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr_ch.png" alt="fr_ch" title="Suisse (Français)"><span class="wpml-ls-native icl_lang_sel_native">Suisse (Français)</span></a>
 					</li>


 					<li class="icl-fr_be wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-fr_be">
 						<a href="https://www.theforkmanager.com/fr_be/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr_be.png" alt="fr_be" title="Belgique (Français)"><span class="wpml-ls-native icl_lang_sel_native">Belgique (Français)</span></a>
 					</li>


 					<li class="icl-nl_be wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-nl_be">
 						<a href="https://www.theforkmanager.com/nl_be/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/nl_be.png" alt="nl_be" title="België (Dutch)"><span class="wpml-ls-native icl_lang_sel_native">België (Dutch)</span></a>
 					</li>


 					<li class="icl-sv wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-sv">
 						<a href="https://www.theforkmanager.com/sv/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/sv.png" alt="sv" title="Sverige"><span class="wpml-ls-native icl_lang_sel_native">Sverige</span></a>
 					</li>


 					<li class="icl-da wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-da">
 						<a href="https://www.theforkmanager.com/da/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/da.png" alt="da" title="Danmark"><span class="wpml-ls-native icl_lang_sel_native">Danmark</span></a>
 					</li>


 					<li class="icl-pt-pt wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-pt-pt">
 						<a href="https://www.theforkmanager.com/pt-pt/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-pt.png" alt="pt-pt" title="Portugal"><span class="wpml-ls-native icl_lang_sel_native">Portugal</span></a>
 					</li>


 					<li class="icl-pt-br wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-pt-br">
 						<a href="https://www.theforkmanager.com/pt-br/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-br.png" alt="pt-br" title="Brasil"><span class="wpml-ls-native icl_lang_sel_native">Brasil</span></a>
 					</li>


 					<li class="icl-nl wpml-ls-slot-footer-language wpml-ls-item wpml-ls-item-nl">
 						<a href="https://www.theforkmanager.com/nl/"><img class="wpml-ls-flag iclflag" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/nl.png" alt="nl" title="Nederland"><span class="wpml-ls-native icl_lang_sel_native">Nederland</span></a>
 					</li>

 							</ul>

 		</li>

 	</ul>
 </div>			</div>

 					</div>

 			</div>


 	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","279817275686172");fbq("track","PageView");</script>
 <noscript>&lt;img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=279817275686172&amp;amp;ev=PageView&amp;amp;noscript=1"&gt;</noscript>

 <script type="text/javascript" id="">piAId="152831";piCId="1053";(function(){function a(){var b=document.createElement("script");b.type="text/javascript";b.src=("https:"==document.location.protocol?"https://pi":"http://cdn")+".pardot.com/pd.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)}window.attachEvent?window.attachEvent("onload",a):window.addEventListener("load",a,!1)})();</script>
 <script type="text/javascript" src="//www.youtube.com/player_api"></script>
 <script type="text/javascript">
 /* <![CDATA[ */
 var appBk = {"bk":"f7343c6063"};
 /* ]]> */
 </script>
 <script type="text/javascript" src="https://www.theforkmanager.com/wp-content/themes/theforkmanager_v2/js/main.min.js?r=1.6.1"></script>
 <script type="text/javascript" src="https://www.theforkmanager.com/wp-includes/js/wp-embed.min.js"></script>
 <script type="text/javascript">
 /* <![CDATA[ */
 var icl_vars = {"current_language":"en","icl_home":"https:\/\/www.theforkmanager.com\/","ajax_url":"https:\/\/www.theforkmanager.com\/wp-admin\/admin-ajax.php","url_type":"1"};
 /* ]]> */
 </script>
 <script type="text/javascript" src="https://www.theforkmanager.com/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js"></script>
 	<script type="text/javascript">
 		$(function(){
 			main.init();


 								home.init();


 		});


 	</script>




 <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/rcj-99d43ead6bdf30da8ed5ffcb4f17100c.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><div id="ads"></div></body></html>
  </body>
</html>
