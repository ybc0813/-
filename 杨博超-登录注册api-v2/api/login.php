<?php
 header('Access-Control-Allow-Origin:*');
 include("conn.php");
 $name=$_GET["name"];
 $pass=$_GET["pass"];
 $token=$_GET["token"];
 $sql="select * from text1 where name='{$name}'";
 $result=mysql_query($sql);//此为将mysql数据启动
 $rs=mysql_Fetch_assoc($result);//此为将启动的数据进行返回关联数组
 $num=mysql_num_rows($result);//函数返回结果集中行的数目
 if($num>0){
     if($pass==$rs["pass"]){
        $arr=array("msg"=>"loginOk");
        echo json_encode($arr);
    
     }else{
        $arr=array("msg"=>"no");
        echo json_encode($arr);
     }
 }else{
     $arr=array("msg"=>"no");
     echo json_encode($arr);
 }

?>