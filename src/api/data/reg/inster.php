<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");
$uname=$_REQUEST["uname"];
$upwd=$_REQUEST["upwd"];
$cpwd=$_REQUEST["cpwd"];
$email=$_REQUEST["email"];
$tel=$_REQUEST["tel"];
if($uname&&$upwd&&$cpwd&&$upwd==$cpwd){
	$sql="INSERT INTO sj_user VALUES(null,'$uname','$upwd','$email','$tel',DEFAULT,DEFAULT,DEFAULT)";
	$result=mysqli_query($conn,$sql);
	echo json_encode(["ok"=>1,"msg"=>"注册成功"]);
}else{
	echo json_encode(["ok"=>0,"msg"=>"注册失败"]);
}