<?php
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
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
 -->
     <!-- Custom Fonts -->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

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









</body></html>
