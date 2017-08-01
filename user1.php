<?php include_once("php_includes/check_login_status.php");?>




<head>
  <meta charset ="UTF-8">
  <title>Social Network</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/bootstrap-social.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>


<body class="profbody">
    <!-- MAIN NAV -->
      <?php //include_once("header.php");?>
    <!-- Main NAV END -->



		<br>
    <div class="col-sm-12  mainprof">
        <div class="col-sm-3">
            <ul class="nav nav-pills nav-stacked mytabs">
                <h4 style="color:#e40046;margin-bottom:0px;">My Account</h4>
                <hr style="margin-top:10px;">
                <li class="active"><a data-toggle="tab" href="#menu4"><span class="fa fa-user"></span>&nbsp;&nbsp;Profile</a></li>
                <hr>
                <li ><a data-toggle="tab" href="#home"><span class="fa fa-money"></span> &nbsp;&nbsp;My orders</a></li>
                <hr>
                <li><a data-toggle="tab" href="#menu1"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;Wishlist</a></li>
                <hr>
                <li><a data-toggle="tab" href="#menu2"><span class="fa fa-user"></span>&nbsp;&nbsp;My Friends</a></li>
                <hr>
                <li><a data-toggle="tab" href="#menu3"><span class="fa fa-user"></span>&nbsp;&nbsp;Requests</a></li>
                <hr>

                <li><a data-toggle="tab" href="#menu5"><span class="fa fa-user"></span>&nbsp;&nbsp;Offers From Users</a></li>
            </ul>
        </div>
        <div class="col-sm-9" style="background-color: white;min-height:1920px;margin-top:10px;padding:0px;">
            <div class="tab-content">
                <div id="home" class="tab-pane fade">
                    <?php include_once("");?>
                </div>
                <div id="menu1" class="tab-pane fade">
                    	<?php include_once("post.php");?>
                </div>
                <div id="menu2" class="tab-pane fade">
                    	<?php include_once("friends.php");?>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <?php include_once("profile.php");?>
                </div>
                <div id="menu4" class="tab-pane fade in active">
                    <?php include_once("");?>
                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="container">
                    <div class="row">
                      <?php include_once("my_offers_list.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <?php include_once("footer.php");?>
</body>
