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
							<li><a href="search.php?city=Ariana">Ariana</a></li>
							<li><a href="search.php?city=Manouba">Manouba</a></li>
							<li><a href="search.php?city=Sousse">Sousse</a></li>
							<li><a href="search.php?city=Sfax">Sfax</a></li>
							<li><a href="search.php?city=Touzer">Touzer</a></li>
							<li><a href="search.php?city=Kef">Kef</a></li>
							<li><a href="search.php?city=Kbeli">Kbeli</a></li>
							<li><a href="search.php?city=Nabeul">Nabeul</a></li>

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
          <a href="#" role="button" aria-expanded="false" onclick="document.getElementById('id01').style.display='block'">Log in </a>

        </li>

<!-- The Modal -->
<div id="id01" class="modal" style="display: none;">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/index.php">
    <div class="container" style="
    width: 100%;
">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required="">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required="">

      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1;width: 100%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<li class="dropdown">
          <a href="#" role="button" onclick="document.getElementById('id02').style.display='block'">Sign up</a>
          <!-- The Modal (contains the Sign Up form) -->
          <div id="id02" class="modal" style="display: block;">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal-content animate" action="index.php">
              <div class="container" style="
    width: 100%;
">
                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required="">

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required="">

                <label><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required="">
                <input type="checkbox" checked="checked"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>

                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signupbtn">Sign Up</button>
                </div>
              </div>
            </form>
          </div>

        </li>
        <li><a href="#">Become a partner</a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
