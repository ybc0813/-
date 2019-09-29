<?php
    header('Access-Control-Allow-Origin:*');
    include("conn.php");
    $name=$_GET["name"];
    $pass=$_GET["pass"];
    $token=base64_encode(time());
    $sql="insert into text1(name,pass,token) values('{$name}','{$pass}','{$token}')";
    if(mysql_query($sql)){
        $arr=array("msg"=>"ok","token"=>"{$token}");
        echo json_encode($arr);
    }else{
        $arr=array("msg"=>"no");
        echo json_encode($arr);
    }
?>