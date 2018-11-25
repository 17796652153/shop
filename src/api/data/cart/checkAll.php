<?php
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
@$checked=$_REQUEST["checked"];
if($uid!=null&&$checked!=null){
	$sql="update sj_shoppingcart_item set is_checked=$checked where item_uid=$uid";
	mysqli_query($conn,$sql);
}