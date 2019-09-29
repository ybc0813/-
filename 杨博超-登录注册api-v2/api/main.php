<?php
     header('Access-Control-Allow-Origin:*');
     include("conn.php");
     $sql="select * from text1";
     $reault=mysql_query($sql);
     $rs=mysql_Fetch_accos($reault);
     echo json_encode($rs);
?>