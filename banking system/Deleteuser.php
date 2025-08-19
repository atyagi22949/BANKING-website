<?php

include '<partials/_dbconnect.php';

$uid = $_GET['id'];

$sql = "delete from users where uid=$uid";

mysqli_query($conn, $sql);

header("location: allusers.php");

?>