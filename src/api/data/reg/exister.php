<?php
header("Content-Type:application/json;charset=utf-8");
require_once("../init.php");
@$uname=$_REQUEST['uname'];
if($uname==null){
    echo json_encode(["ok"=>-1,"msg"=>"请输入用户名"]);
}else{
    $sql="SELECT uname from sj_user WHERE uname='$uname'";
    $result=mysqli_query($conn,$sql);
    $res=mysqli_fetch_all($result,1);
    if($res==null){
        echo json_encode(["ok"=>1,"msg"=>"用户名可以使用"]);
    }else{
        echo json_encode(["ok"=>0,"msg"=>"用户名已经被占用"]);
    }
}