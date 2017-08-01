<!DOCTYPE HTML>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Font AWesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="main.css" rel="stylesheet">
    <script src="thescript.js"></script>
    <title>Udacity - The only one</title>
    <script>
        $(document).on('ready', function () {
            var flag = true;
            $(window).scroll(startCounter);

            function startCounter() {
                if (flag && $(window).scrollTop() > 2200) {
                    flag = false;
                    $('.countfront').each(function () {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 3000
                            , easing: 'swing'
                            , step: function (now) {
                                $(this).text(Math.ceil(now).toLocaleString());
                            }
                        });
                    });
                }
            }
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 header">
                <div class="col-sm-5">
                    <div class="logo"><img src="udacity_logo.png" height="60px" width="300px"></div>
                </div>
                <div class="col-sm-7">
                    <div class="headtabs">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"> Explore</a></li>
                            <li><a href="post_new_service.php"> Post Service</a></li>
                            <li><a href="notifications.php"> Notifications</a></li>
                            <li><a href="pl.php"> Catalog</a></li>
                            <li><a href="#"> For Business</a></li>
                            <li class="dropdown">
  				<a class="dropdown-toggle" href="" data-toggle="dropdown">Login<span class="caret"></span></a>
  				<ul class="dropdown-menu">
    					<?php include_once("login.php");?>
  				</ul>
				</li>
                            <li>    <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Signup</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  para1">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 style="color:white;margin-top:2%;">Featured Services</h1> </div>
        </div>
        <div class="row para2">
            <div class="fpbox"></div>
            <div class="boxl"><a><img src="sa.jpg"><div class="desc">Space</div><div class="descb">Explore Now</div></a></div>
            <div class="boxr"><a><img src="m.jpg"><div class="desc">Mechanical</div><div class="descb">Explore Now</div></a></div>
            <div class="boxl"><a><img src="i.jpg"><div class="desc">IT</div><div class="descb">Explore Now</div></a></div>
            <div class="boxr"><a><img src="p.jpg"><div class="desc">Aeronautical</div><div class="descb">Explore Now</div></a></div>
            <div class="boxl"><a><img src="a.jpg"><div class="desc">Applications</div><div class="descb">Explore Now</div></a></div>
            <div class="boxr"><a><img src="sa.jpg"><div class="desc">Space</div><div class="descb">Explore  Now</div></a></div>
        </div>
        <div class="row" style="background-color:#262626;">
            <div class="col-sm-10 col-sm-offset-1 county">
                <div class="col-sm-3">
                    <h4>Startups Associated</h4> <span class="fa fa-bank"></span>
                    <h1 class="countfront">13300</h1> </div>
                <div class="col-sm-3">
                    <h4>Service Providers</h4> <span class="fa fa-joomla"></span>
                    <h1 class="countfront">12332</h1> </div>
                <div class="col-sm-3">
                    <h4>Total Services</h4> <span class="fa fa-ravelry"></span>
                    <h1 class="countfront">123230</h1> </div>
                <div class="col-sm-3">
                    <h4>Successful Deals</h4> <span class="fa fa-stack-overflow"></span>
                    <h1 class="countfront">121111</h1> </div>
            </div>
        </div>
        <div class="row para3">
            <h1>Our Collaboarating<br>partners.</h1>
            <br>
            <div class="partners"> <img src="nv.png" height="60" width="300"> <img src="go.png" height="60" width="200"> <img src="am.png" height="60" width="200"> <img src="co.png" height="50" width="320"> </div>
        </div>
        <div class="row para3">
            <div class="flatrow">
                <div class="flatbox">
                    <div class="fbhead"> <img src="in.png">
                        <h2>Meet Our Partners.</h2>
                        <p>Accelerate your development with services that will boost your professional success.</p>
                    </div>
                    <div class="fbbot"> <a>Check Out Now</a> </div>
                </div>
                <div class="flatbox">
                    <div class="fbhead"> <img src="ni.jpg">
                        <h2>Meet Our Partners.</h2>
                        <p>Accelerate your development with services that will boost your professional success.</p>
                    </div>
                    <div class="fbbot"> <a>Check Out Now</a> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <footer>
        <div class="col-sm-12 asd">
            <div class="col-sm-5" style="position:relative;left:5%;">
                <a href="#"><img style="height:70px; width:150px;" src="backnew.jpg"></a>
                <div class="footverti"></div>
                <div class="foottag">BUY.
                    <br>SELL.</div>
                <p style="font-size:1.5em;color:black;padding-top:10px;">Over <b>1,00,000</b> unique customers last month</p>
                <p style="color:black;font-size:1.1em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum gravida ante,</p>
            </div>
            <div class="col-sm-2 footli">
                <ul>
                    <li><a href="#">Site Map</a></li>
                    <hr>
                    <li><a href="#">Featured Ads</a></li>
                    <hr>
                    <li><a href="#">Locations Map</a></li>
                    <hr>
                    <li><a href="#">Popular Searches</a></li>
                    <hr> </ul>
            </div>
            <div class="col-sm-2 footli">
                <ul>
                    <li><a href="#">Terms of Use </a></li>
                    <hr>
                    <li><a href="#">Help &amp; Contact Us</a></li>
                    <hr> </ul>
            </div>
            <div class="col-sm-2 social-tabs">
                <p style="color:white;font-size:1.2em;text-align:center;">JOIN US TODAY</p>
                <a class="btn btn-social-icon btn-google"> <span class="fa fa-google"></span> </a>
                <a class="btn btn-social-icon btn-reddit"> <span class="fa fa-reddit"></span> </a>
                <a class="btn btn-social-icon btn-facebook"> <span class="fa fa-facebook"></span> </a>
                <a class="btn btn-social-icon btn-instagram"> <span class="fa fa-instagram"></span> </a>
                <br>
                <a class="btn btn-social-icon btn-twitter"> <span class="fa fa-twitter"></span> </a>
                <a class="btn btn-social-icon btn-pinterest"> <span class="fa fa-pinterest"></span> </a>
                <a class="btn btn-social-icon btn-tumblr"> <span class="fa fa-tumblr"></span> </a>
            </div>
        </div>
    </footer>
        </div>

    
    
    
    
    
    
    


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <?php include_once("signup.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
        </body>