<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");

$sql="SELECT * from sj_index_floor3_product";
$res=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_all($res,1));