<?php include_once("php_includes/check_login_status.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="UTF-8">
  <title>Social Network</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/bootstrap-social.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body >

<?php include_once("header.php");?>
<div class="container" style="height:750px">
  <div class="row">
        <div class="col-sm-6">
          <h1 >MeetHub helps you connect and share with the people in your life.</h1>
          <p>Join MeetHub and become a part of world's largest community.</p>
          <img src="images/ozoo.png" width="100%" height="350px"/>
      </div>
        <div class="col-sm-1">
        </div>

      <div class="col-sm-5" style="background-color:#e6e6e6; height:auto; border-radius:5px ; padding-top:25px">
        <?php include_once("signup.php");?>
      </div>

  </div>
  <br>
  <div class="row"style="background-color:#e6e6e6;padding:30px">
    <h2 align="center">"Making the world open and connected"</h2>
  </div>



</div>





<?php include_once("footer.php");?>
</body>
</html>
