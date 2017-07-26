<?php
    include('db.php');
    include('head.php');
    include('nav.php');

?>


<div class="container-fluid">
    <div class="row">


		<div class="col-md-4" style="
    border-color: #f9b129;
">
			<div id="accordion" class="panel panel-primary behclick-panel" style="border-color: #f9b129;background-color: #f9b129;">
				<div class="panel-heading">
					<h3 class="panel-title">Search Filter Restaurant</h3>
				</div>
				<div class="panel-body" >
					<div class="panel-heading " >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse0">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Price
							</a>
						</h4>
					</div>
					<div id="collapse0" class="panel-collapse collapse in">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										0 - 10$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										10$ - 20$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										20$ - 60$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										More Than <60></60>$
									</label>
								</div>
							</li>
						</ul>
					</div>

					<div class="panel-heading ">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Cuisine
							</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Cuisine française
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										cuisine tunisienne 
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										cuisine italienne
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Type</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse in">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Sandwichs
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Plat
									</label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>

        <div class="col-md-8">

<?php 

	$city = '';
	if(isset($_GET['city'])){
		$city = strtoupper($_GET['city']);
	}
    
    $sql = "SELECT * FROM adresse A JOIN resto R ON A.id = R.adresseid WHERE  '". $city."' = UPPER(city) ";
    // SELECT * FROM adresse A JOIN resto R ON A.id = R.adresseid WHERE 'sousse' = A.id

    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

        echo " ";

        while($row = $result->fetch_array()) {

            $listOpen = list($hour, $min, $sec) = explode(':',$row["openTime"]) ;
            $listClose = list($hour, $min, $sec) = explode(':',$row["closeTime"]) ;
            $nameOfDay = date('D', strtotime($row["closeDay"]));

            
        echo "
<div class='row' style='margin-bottom:5px;'>
        <a href='compteRestaurant.php?id=".$row['id']."'>
                        <div class='media col-md-3'>
                            <figure class='pull-left'>
                                <img class='media-object img-rounded img-responsive' width='204' height='136' src='". $row["image_url"]."' alt='". $row["image_url"]."' >
                            </figure>
                        </div>
                        <div class='col-md-6'>
                            <h2> ". $row["name"]." </h2>
                            <p class='list-group-item-text'> 
                            Adress  ". $row["street"].", ". ucfirst ($row["city"])." ". strtoupper ($row["country"])."<br>
                            Open from ". $listOpen[0]. ":". $listOpen[1]. " 
                            to ". $listClose[0].":". $listClose[1]."<br>
                            Close Day ". $nameOfDay."<br>
                            </p>
                        </div>
                        <div class='col-md-3 text-center'>
                            <button type='button' class='btn btn-primary btn-lg btn-block'>Book</button>
                            <div class='stars'>
                                <span class='glyphicon glyphicon-star-empty'></span>
                                <span class='glyphicon glyphicon-star-empty'></span>
                                <span class='glyphicon glyphicon-star-empty'></span>
                                <span class='glyphicon glyphicon-star-empty'></span>
                                <span class='glyphicon glyphicon-star-empty'></span>
                            </div>
                            <p> Average ".rand(0,5)." <small> / </small> 5 </p>
                        </div>
                </a>
               </div>
            ";

                }


    } else {echo "not found";
    }

?>
   
</div>
</div>
<?php 
    include('footer.php');
?>
