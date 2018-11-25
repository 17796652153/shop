<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");

$uname=$_REQUEST["uname"] or die('{"code":401,"msg":"uname required"}');
$upwd=$_REQUEST["upwd"] or die('{"code":402,"msg":"upwd required"}');
$sql="SELECT uid FROM sj_user WHERE uname='$uname' AND upwd='$upwd'";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_row($result);
 //echo($res[0]);
if(!$res){
   echo ('{"code":201,"msg":"uname or upwd required"}');
}else{
    $uid=$res[0];
    session_start();
    $_SESSION["uid"]=$uid;
    $_SESSION['loginUname'] = $uname;
    echo('{"code":202,"msg":"登录成功"}');
}