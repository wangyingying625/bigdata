<?php
session_start();
include_once "../connect.php";
date_default_timezone_set('PRC');//设定时区
$enter_time = $_GET['old_time'];
$leave_time = date("Y-m-d H-m-s");
$sql = "insert into relax_time(enter_time,leave_time,userid) values('$enter_time','$leave_time',1)";
mysqli_query($connent, $insertdata);
?>