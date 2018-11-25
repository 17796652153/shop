<?php
require_once("../init.php");
session_start();
@$iid=$_REQUEST["iid"];
@$checked=$_REQUEST["checked"];
if($checked!=null&&$iid!=null){
	$sql="update sj_shoppingcart_item set is_checked=$checked where iid=$iid";
	mysqli_query($conn,$sql);
}