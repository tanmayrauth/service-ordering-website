<?php
include_once("php_includes/check_login_status.php");// Filter query
$sql= "SELECT distinct * FROM users WHERE 1 ";
$all_members=mysqli_query($connection,$sql);


?>
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
<body>
<div style="background-color:#999999;">
<?php include_once("header.php");?>

<div class="container" style="background-color:#f2f2f2;height:600px">

    <h2>Our members</h2>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Joined On</th>
            <th>Email</th>
            <th> Profile</th>
          </tr>
        </thead>
        <tbody>


    <?php if(isset($all_members) && count($all_members)) : ?>
        <?php foreach ($all_members as $key => $members) : ?>




                      <tr>
                        <td><?php echo $members['username'];?></td>
                        <td><?php echo $members['signup'];?></td>
                        <td><?php echo $members['email'];?></td>
                        <td><a href="user.php?u=<?php echo $members['username'];?>" class="btn btn-info" role="button">View Profile</a></td>
                      </tr>




                <?php endforeach; ?>
                    <?php else : ?>
                        <h3>Sorry, no results found! </h3>
                        <h5>Please check the spelling or try searching for something else</h5>
                        <?php endif; ?>

                      </tbody>
                    </table>
</div><br>
<?php include_once("footer.php");?>
</div>

</body>
