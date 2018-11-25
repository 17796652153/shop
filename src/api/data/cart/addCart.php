<?php
//data/cart/addCart.php
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
@$lid=$_REQUEST["lid"];
@$count=$_REQUEST["count"];
if($uid!=null&&$lid!=null&&$count!=null){
	$sql="select * from  sj_shoppingcart_item where item_uid='$uid' and item_mid='$lid'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$iid=$row[0];
	if($row==null)
		$sql="insert into  sj_shoppingcart_item values (null, $uid, $lid, $count, 0)";
	else
		$sql="update sj_shoppingcart_item set count=count+$count where item_mid='$lid'";
	$result=mysqli_query($conn,$sql);
}