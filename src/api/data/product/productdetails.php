<?php
header("Content-Type:application/json");
require_once("../init.php");
$output=[];
@$mid=$_REQUEST["mid"];
if($mid!=null){
	$sql="select * from sj_mobile where mid=$mid";
	$result=mysqli_query($conn,$sql);
	$product=mysqli_fetch_all($result,1)[0];
	$output["product"]=$product;

	$fid=$product["fid"];
	$sql="SELECT spec_id,spec_mid, spec FROM sj_mobile_spec where spec_mid=$mid";
	$result=mysqli_query($conn,$sql);
	$output["specs"]=mysqli_fetch_all($result,1);

	$sql="SELECT * FROM sj_mobile_pic where p_mid=$mid";
	$result=mysqli_query($conn,$sql);
	$output["pics"]=mysqli_fetch_all($result,1);

	echo json_encode($output);
}