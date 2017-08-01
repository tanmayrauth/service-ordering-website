<?php
$connection=mysqli_connect("localhost","root","","jaimatadi");
// check for connection
if (mysqli_connect_errno())
    {
	echo mysqli_connect_error();
    exit();
	}

?>