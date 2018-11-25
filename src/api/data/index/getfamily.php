<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");

$sql="select name,falimy_id from sj_mobile_falimy" ;
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,1);
echo json_encode($rows);