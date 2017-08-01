<?php
include_once("php_includes/check_login_status.php");
if(!$user_ok){
	//header("location: index.php");
   //S exit();
}

if(isset($_GET['service_id']))
{
$service_id=$_GET['service_id'];



// getting institute_id of logged user
$sql = "SELECT * FROM `my_serivces` WHERE id='$service_id' LIMIT 1";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);
  //  echo $sql;



}

?>



















<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="main.css">

	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['', 'TCS', 'Infosys', 'IBM', 'Google'],
         ['',  1200, 990, 880, 1508],
         
      ]);

		var options = {
		  title : 'Market Rates',
		  vAxis: {title: 'Rate(in $)'},
		  hAxis: {title: 'Company'},
		  seriesType: 'bars',
		  series: {5: {type: 'line'}}
		};

		var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	  }
	</script>
	<style>
			  /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
			  textarea {
			resize: none;
		}
		.form-label {
			font-size: 12px;
			color: #5e9bfc;
			margin: 0;
			display: block;
			opacity: 1;
			-webkit-transition: .333s ease top, .333s ease opacity;
			transition: .333s ease top, .333s ease opacity;
		}
		.form-control {
			border-radius: 0;
			border-color: #ccc;
			border-width: 0 0 2px 0;
			border-style: none none solid none;
			box-shadow: none;
		}
		.form-control:focus {
			box-shadow: none;
			border-color: #5e9bfc;
		}
		.js-hide-label {
			opacity: 0; 	
		}
		.js-unhighlight-label {
			color: #999 
		}
		.btn-start-order {
			background: 0 0 #ffffff;
			border: 1px solid #2f323a;
			border-radius: 3px;
			color: #2f323a;
			font-family: "Raleway", sans-serif;
			font-size: 16px;
			line-height: inherit;
			margin: 30px 0;
			padding: 10px 50px;
			text-transform: uppercase;
			transition: all 0.25s ease 0s;
		}
		.btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
			border-color: #5e9bfc;
			color: #5e9bfc;
		}
    </style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
</head>

<body>
    <?php include_once("head.php");?>

		<div class="container">
	  <div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
			<h2>Request Demo</h2>
		  </div>
	  </div>
	  <div class="row">
		  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
			  <form id="contact-form" class="form" action="#" method="POST" role="form">
				  <div id="input">
				  <div class="form-group">
					  <label class="form-label" for="name">Your Name</label>
					  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
				  </div>                            
				  <div class="form-group">
					  <label class="form-label" for="email">Your Email</label>
					  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
				  </div>                            
				  <div class="form-group">
					  <label class="form-label" for="subject">Phone No</label>
					  <input type="text" class="form-control" id="subject" name="subject" placeholder="Contact" tabindex="3">
				  </div>      
				</div>
				  <div id = "submit" class="text-center">
					  <button type="submit" class="btn btn-start-order">Submit</button>
				  </div>
			  </form>
		  </div>
	  </div>
	</div>
		


	
	<section id="desc">
		<div id= desc-title>
			<h1> Description</h1>
		</div>
		<div id= desc-content>
			<p> <?php echo $row['description1'];?></p>
		</div>
        <div id= desc-content>
			<p> <?php echo $row['description2'];?></p>
		</div>
        <div id= desc-content>
			<p> <?php echo $row['description3'];?></p>
		</div>
	</section>
	<section id="choose">
			<div id ="choose-wrap">
				<div id="why">
					<h1>Why Choose Us?</h1>
					<p><?php echo $row['why']?></p>
				</div>
				<div id="graph">
					<div id="chart_div" style="width: 500px; height: 300px;"></div>
				</div>
			</div>	
	</section>
    
    <section id="choose">
			<div id ="choose-wrap">
				<div id="why">
					<h1>Service Posted on :</h1>
					<p><?php echo $row['posted_on']?></p>
				</div>
				
			</div>	
        <div id ="why">
					<h1>Company ID : <?php echo $row['company_id']?></h1>
				</div>
	</section>
	
	
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
<?php include_once("foot.php");?>
</body>
</html>
