<!--debut nav-->

  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Feed Me</a>
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
                                <div class="item active">
                                    <a href="#"><img src="img/suggestion1.jpg" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Double Beef Sandwish</small></h4>
                                    <button class="btn btn-primary" type="button">6.5 DT</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                                <div class="item">
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
          <a href="#" role="button" aria-expanded="false" onclick="document.getElementById('id01').style.display='block'"><?=$_SESSION['username'] ?> </a>

        </li>

        <li class="dropdown">
          <a href="home.php" role="button" aria-expanded="false" onclick="document.getElementById('id01').style.display='block'">sign out </a>

        </li>

        <li>
          <a href="#">Become a partner</a>
        </li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
