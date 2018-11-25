<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");
$fid=$_REQUEST["fid"];
$sql="select mid ,title,(select sm from sj_mobile_pic where p_mid=mid limit 1) as pic  from sj_mobile where fid=$fid";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,1);
echo json_encode($rows);