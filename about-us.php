<?php
require 'includes/config.php'; 
$b = mysqli_fetch_assoc(mysqli_query($con,"select * from $con_table where cid=2"));  //update current user time left
$page_name=$b['title'];
require 'main.php';
?>
