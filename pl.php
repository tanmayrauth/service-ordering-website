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
    <!-- slider -->
    <link rel="stylesheet" href="css/slider.css">
    <!-- check -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/formcss.css">
    <script src="js/bootstrap-slider.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Udacity - The only one</title>
    <style>
        .lh:active {
            border: none;
            background: none;
        }
        
        .lh img {
            border: 1px solid grey;
        }
        
        .filele h3 small {
            font-weight: 500;
            color: #969696;
        }
        
        .langu label {
            margin-right: 5px;
        }
        
        .langu label input {
            margin-right: 5px;
        }
    </style>
    <script>
        $(document).on('ready', function () {
            $("#ex2").slider({});
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <div class="col-sm-12 header">
                    <div class="col-sm-5">
                        <div class="logo"><img src="udacity_logo.png" height="60px" width="300px"></div>
                    </div>
                    <div class="col-sm-7">
                        <div class="headtabs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"> Explore</a></li>
                                <li><a href="#"> Catalog</a></li>
                                <li><a href="#"> For Business</a></li>
                                <li><a href="#" class="login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h1 style="font-size:2em;margin-left:0%;"><b>Services and Solutions Provided</b></h1> </div>
                <div class="col-sm-8">
                    <div class="main-search" style="position:relative;left:-5%;top:-10px;margin:0px 50px 0px 50px;">
                        <button class="btn btn-primary" type="submit" style="float:right;width:100px;height:50px;border-right-radius:1px;background-color:#3d3b3b;"><span class="glyphicon glyphicon-search"></span></button>
                        <div style="overflow:hidden;">
                            <input type="text" class="form-control" placeholder="Search...." name="kyu" style="border-radius:0px;height:50px;"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="background:white;">
                    <!-- filters -->
                    <div class="col-sm-3" style=";background:white;border-right:1px solid #ededed;">
                        <div class="row filele" style="margin:25px 0px 5px 0px;">
                            <h3 style="margin:10px 0px 0px 10px;"><small>Type</small></h3> </div>
                        <hr style="margin:0px;">
                        <div class="langu row" style="margin:0px 10px 0px 10px;">
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Logistics</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Engineering</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Networking</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Mechanical</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>IT</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Futuristic</label>
                                </div>
                            </div>
                        </div>
                        <div class="row filele" style="margin:25px 0px 5px 0px;">
                            <h3 style="margin:10px 0px 0px 10px;"><small>Standard</small></h3> </div>
                        <hr style="margin:0px;">
                        <div class="Semesters row" style="margin:0px 10px 0px 10px">
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Fortune 500</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>King's 11</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Ivy Leagues</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Overseas</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Internationale</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Cons</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>Societies</label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" value="">
                                    <label>NGOs</label>
                                </div>
                            </div>
                        </div>
                        <hr style="margin:0px 0px 20px;">
                        <div class="college" style="margin:0px 10px 0px 10px">
                            <label for="sel1">Sort Services By Providers:</label>
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="row" style="height:100px;">
                            <p style="margin:10px 0px 0px 10px"><span style="white-space:nowrap;font-size:2em;">All Services</span> <span style="padding:0px 0px 0px 0px;margin:20px 0px 0px 10px;font-size:1.6em;"><small>(51203 services)</small></span> </p>
                            <hr style="margin-bottom:0;"> </div>
                        <div class="services">
                            <div class="one">
                                <div class="row">
                                    <div class="col-sm-3"> <img src="in.png"> </div>
                                    <div class="col-sm-9 servdes">
                                        <h3><a>Robotics Nanobots</a></h3>
                                        <h5 style="position:absolute;top:15px;right:60px;"><b>Most Popular</b>    </h5>
                                        <p>Master skills with hands-on projects in simulated environments and on real hardware. Change our world for the better using robotics to extend our capabilities in new ways.
                                            <br>
                                            <br>IN COLLABORATION WITH <b>Bosch, Electric Movement, iRobot, Kuka, Lockheed</b> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="one">
                                <div class="row">
                                    <div class="col-sm-3"> <img src="in.png"> </div>
                                    <div class="col-sm-9 servdes">
                                        <h3><a>Larsen and Toubro Logistics</a></h3>
                                        <h5 style="position:absolute;top:15px;right:60px;"><b>Most Popular</b>    </h5>
                                        <p>Master skills with hands-on projects in simulated environments and on real hardware. Change our world for the better using robotics to extend our capabilities in new ways.
                                            <br>
                                            <br>IN COLLABORATION WITH <b>Bosch, Electric Movement, iRobot, Kuka, Lockheed</b> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <footer>
                    <div class="col-sm-12 asd">
                        <div class="col-sm-5" style="position:relative;left:5%;">
                            <a href="#"><img style="height:70px; width:150px;" src="u.jpg"></a>
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
        </div>
</body>