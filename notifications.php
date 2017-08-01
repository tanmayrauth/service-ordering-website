<?php
include_once("php_includes/check_login_status.php");
// If the page requestor is not logged in, usher them away

$notification_list = "";
$sql = "SELECT * FROM notifications WHERE username LIKE BINARY '$log_username' ORDER BY date_time DESC";
$query = mysqli_query($connection, $sql);
$numrows = mysqli_num_rows($query);
if($numrows < 1){
	$notification_list = "You do not have any notifications";
} else {
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$noteid = $row["id"];
		$initiator = $row["initiator"];
		$app = $row["app"];
		$note = $row["note"];
		$date_time = $row["date_time"];
		$date_time = strftime("%b %d, %Y", strtotime($date_time));
		$notification_list .= "<p><a href='user.php?u=$initiator'>$initiator</a> | $app<br />$note</p>";
	}
}
mysqli_query($connection, "UPDATE users SET notescheck=now() WHERE username='$log_username' LIMIT 1");
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Notifications and Friend Requests</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<style type="text/css">
div#notesBox{float:left; width:430px;  margin-right:60px; padding:10px;}

</style>
<script src="js/func.js"></script>
<script src="js/ajax.js"></script>

</head>
<body>

<div id="pageMiddle">
  <!-- START Page Content -->
  <div id="notesBox"><?php echo $notification_list; ?></div>

  <div style="clear:left;"></div>
  <!-- END Page Content -->
</div>

</body>
</html>
