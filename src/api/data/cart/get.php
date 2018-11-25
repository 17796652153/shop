<?php
header("Content-Type:application/json");
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
if($uid!=null){
	$sql="select *,(select sm from sj_mobile_pic where p_mid=mid limit 1) as pic,(select spec from sj_mobile_spec where spec_mid=mid limit 1) as spec from `sj_shoppingcart_item` inner join sj_mobile on mid=item_mid where item_uid=$uid";
	$result=mysqli_query($conn,$sql);
	echo json_encode(mysqli_fetch_all($result,1));
}