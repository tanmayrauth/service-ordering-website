<?php
include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
if(!$user_ok){
	//header("location: login_signup.php");
    //exit();
}
else{
	 
        
       // $result=mysqli_query($connection, "SELECT count(*) as total from my_services where company_id=".$log_id);
//    $data=mysqli_fetch_assoc($result);
  //  $ser_no =  $data['total'];
	
	
	// check no of posted ads

	}




// REGISTRATION
if(isset($_POST["service_id"])){
	// CONNECT TO THE DATABASE


	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
	$s = preg_replace('/[^a-z0-9 ]/i', '', $_POST['service_id']);
	$sn = preg_replace('/[^0-9]/i', '', $_POST['since']);

	$p = preg_replace('/[^0-9]/i', '', $_POST['mrp']);
	$d1 = htmlentities($_POST['desc1'], ENT_QUOTES);
    	$d2 = htmlentities($_POST['desc2'], ENT_QUOTES);
    	$d3 = htmlentities($_POST['desc3'], ENT_QUOTES);

	$d = preg_replace('/[^a-z]/i', '', $_POST['demo']);
	$w = htmlentities($_POST['why'], ENT_QUOTES);


//	echo $b.$e.$a.$s.$br.$p.$d.$ep.$i.$c.$log_id;
//	echo $_FILES["p1"]["name"].$_FILES["p2"]["name"].$_FILES["p3"]["name"];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

		$sql = "INSERT INTO `my_serivces`( `sub_services`, `company_id`, `description1`, `description2`, `description3`, `price`, `since`, `demo`, `why`) 
		        VALUES('$s','$log_id','$d1','$d2','$d3','$p','$sn','$d','$w')";
    
		$query = mysqli_query($connection, $sql);
		$post_id = mysqli_insert_id($connection);


		//echo $adv_id;


		//include_once("php_parsers/photo_system.php");


		//notification feeds
		$reason = "Ad posted";
			$note = 'Your service posted sucessfully, Advertisement id: '.$post_id.' | <a href="product.php?sel_id='.$log_id.'&adv_id='.$post_id.'">Service :'.$s.'</a>';
			mysqli_query($connection, "INSERT INTO notifications(user_id, reason, note, date_time) VALUES('$log_id','$reason','$note','$date')");

	 


		


		header("location: service.php?service_id=".$post_id);

		exit();
	}

?>


<!DOCTYPE html>
<!-- integrated with asset-->
<html lang="en">

    <head>
			<title>Sell Books! Post a Free Ad for your Used Book.</title>
			<meta name="description"
			content="Sell your book to your Juniors directly from your Institute and make more PROFIT thereby eliminating Middleman like Secondhand Book Sellers.">
			<meta name="keywords" content="Aduera, post ad, Recommended Engineering books, used books in mumbai, book sellers in mumbai , juniors, seniors, online textbooks, Buy and Sell Online Books, online Reference books, sell books, sell books online, mumbai university, engineering books, technical, techmax ,new books, sell old books , buy books ,sell books">

				<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
				<link rel="stylesheet" href="asset/css/form-elements.css">
        <link rel="stylesheet" href="asset/css/style.css">
				<link rel="stylesheet" href="project.css">

				<script src="js/func.js"></script>
				<script src="js/ajax.js"></script>
				<script>
					

					function postAdd(){
						var sid = _("service_id").value;
						var s = _("since").value;
						var d1 = _("desc1").value;
                        var d2 = _("desc2").value;
                        var d3 = _("desc3").value;
						var m = _("mrp").value;
						var d = _("demo").value;
						var w = _("why").value;
						var status = _("status");

						if(sid == "" || s == ""  || d1 == ""  || d2 == ""  || d3 == ""  ||  m == "" || d == "" || w =""){
							status.innerHTML = "Fill out all form data";
							return false;
						}
						
						else {
							return true;
						}
					}

					function check(){
						if(document.getElementById("p1").value == "") {
							alert();
						}
					}




				</script>

				<style>
						body{
							background:url("images/back.jpg") no-repeat center center fixed;
							width: 100%;
							height: 100%;
							-webkit-background-size: cover;
  						-moz-background-size: cover;
  						-o-background-size: cover;
  						background-size: cover;
							}
							.header{
								margin-top: 2px;
								font-size: 38px;
									font-weight: 100;
									color: #555;
									line-height: 50px;



							}
							@media screen and (max-width: 600px) {
						#heading {
							display: none;
							clear: both;


						}

						#log_button{
							margin-bottom: 50px;
						}
					}

				</style>
	  </head>

    <body >

			<div class= "row">
				 <div class="col-sm-12" style="padding:0px">

								 <div class="container-fluid" id="heading" style="padding: 0px 0px 0px 0px;margin-bottom:0px">
										 <div class="col-sm-4"><p style="font-size:0.9em;font-family:sans-serif;margin-right:40%;margin-bottom:0px;color:white;"><b>India's Fastest Tech Services Provider </b></p></div>
										 <div class="col-sm-4"></div>
										 <div class="col-sm-4 "  style="left:3%">

												 <a href="main/help1.html" style="padding:5px 20px 5px 5px;font-size:0.9em ;color:white; "><b><span class="glyphicon glyphicon-info-sign" style="padding-right:5px;color:white"></span>Help Centre</b></a>
												 <a href="<?php// echo $app;?>" style="padding:5px 5px 10px 5px;font-size:0.9em;color:white;"><b><span class="glyphicon fa fa-android" style="padding-right:5px;color:white"></span>Download our Android App</b></a>



										 </div>

								 </div>

				 </div>
		 </div>



		<div class= "row" >
			<div class="col-sm-3">
				<div class= "row" >
					<div class="col-sm-1">

					</div>
					<div class="col-sm-3">
						<a  href="#"><img src="" ></a>
					</div>
				</div>

			</div>
        <div class="col-sm-6">

									<p class="header"  style="color:black;background:#fff7f7;opacity: 0.7; " ><Strong>Adtech </strong>Service Posting Wizard</p>

				</div>
				<div class="col-sm-3" id="log_button">

					<div class="dropdown" style="position:absolute;width:250px;height:45px;left:30%;float:left;	">
						<button type="button dropdown-toggle" style="right:10px;width:250px;height:45px;background-color:#aa140a;padding-top:1px;"
										class="btn btn-danger" id="menu1" data-toggle="dropdown">
										Welcome <?php echo $log_name;?>&nbsp;<span class="caret"></span></button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
											<li role="presentation"><a role="menuitem"  href="my_account/">My Account</a></li>
											<li role="presentation"><a role="menuitem"  href="main/contact_aduera.html">Contact Us</a></li>
											<li role="presentation"><a role="menuitem"  href="logout.php">Logout</a></li>
										</ul>
					</div>

				</div>




		</div>




        <!-- Top content -->






                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="post_new_service.php" enctype="multipart/form-data" method="post" class="f1">

                    		<h3>Post your  Service no : <?php //echo $ser_no+1 ;?>  (You have posted uptill <?php //echo $ser_no;?> Services)</h3>
                    		<p>Fill in the form to post your Ad</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Service Details</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Description</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-money"></i></div>
                    				<p>Pricing</p>
                    			</div>
                    		</div>

                    		<fieldset>
                    		    <h4>Tell us about the service</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" >Company Name </label>
                                    
                                    <input type="text" disabled name="btitle" value="Accenture" placeholder="<?php //echo $name;?>" class="form-control" id="btitle">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" >Service Name</label>
                                <select class="f1-last-name form-control" id="service_id" name="service_id" >
                                       <?php 
                                        $sql= "SELECT distinct * FROM sub_services  WHERE 1 "; 
                                    
                                        $all_service = mysqli_query($connection,$sql);
                                    $check = mysqli_fetch_assoc($all_service);?>
                                    
                                     <?php if(isset($check) && count($check)) : ?>
                                    <?php foreach ($all_service as $key => $services) : 
                                          echo '<option   value="'.$services['id'].'">'.$services['name'].'</option>';

                                    ?>
                                     <?php endforeach; ?>
                                    <?php else : ?>
                                    <div class="alert  alert-info">
                                        <h3>Sorry, no results found! </h3>
                                        <h4>Please check the spelling or try searching for something else using our Filters.</h5></div>
                                    <?php endif; ?>
                                    </select>
                                </div>
								
								<div class="form-group">
                                    <label class="sr-only" for="f1-email">Providing Since</label>
                                    <input type="number" id="since" name="since" placeholder="Providing Since year" class="f1-first-name form-control" id="since">
                                </div>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Continued:</h4>


																<div class="form-group">
																		<label class="sr-only" >Description 1: </label>
																		<textarea  id="desc1" name="desc1" placeholder="Description of your service (minimum 50 characters)"
																											 class="f1-about-yourself form-control" id="description1"  max="200" min="50" required></textarea>
																</div>
                                                                        <div class="form-group">
																		<label class="sr-only" >Description 2: </label>
																		<textarea  id="desc2" name="desc2" placeholder="Description of your service (minimum 50 characters)"
																											 class="f1-about-yourself form-control" id="description2"  max="200" min="50" required></textarea>
																</div><div class="form-group">
																		<label class="sr-only" >Description 3: </label>
																		<textarea  id="desc3" name="desc3" placeholder="Description of your service (minimum 50 characters)"
																											 class="f1-about-yourself form-control" id="description3"  max="200" min="50" required></textarea>
																</div>
                           

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Pricing</h4>
																

                                <div class="form-group">
                                    <label class="sr-only" >MRP</label>
                                    <input type="number" name="mrp"  placeholder="MRP" class=" form-control" id="mrp" required>
                                </div>

																
                                <div class="form-group" >
                                    <label class="sr-only" >Demo Available</label>
                                    <select name ="demo" id="demo" class="f1-last-name form-control">
                                    <option name="demo"  value = "yes" class="f1-last-name form-control" >YES</option>
                                    <option name="demo"  value = "no" class="f1-last-name form-control" >NO</option>
                                    </select>    
                                </div>
                                <div class="form-group">
																		<label class="sr-only" >Why we </label>
																		<textarea  name="why" placeholder="Description of your service (minimum 50 characters)"
																											 class="f1-about-yourself form-control" id="why"  max="200" min="50" required></textarea>
																</div>
                                
                                <span id="status"></span>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" id="postadd" onclick="return postAdd();" class="btn btn-submit" >Post Service</button>
                                </div>

                            </fieldset>


                    	</form>
                    </div>
                </div>



        <!-- Javascript -->

        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/retina-1.1.0.min.js"></script>
        <script src="asset/js/scripts.js"></script>


    </body>

  <?php// include_once("quick_actions.php");?>
</html>