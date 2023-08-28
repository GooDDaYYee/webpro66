<?php
    function connect_db($type="client"){ // รับค่า $type ตรวจว่าเป็น client หรือไม่
        if($type=="client"){
            $con=mysqli_connect("localhost","root","","onlinestore"); // ในครื่องของเรา
        }elseif($type=="server"){
            $con=mysqli_connect("localhost","cistrain_oakkh","Ballasdz123","cistrain_oakkh"); // ในเซิฟเวอร์
        }
        mysqli_set_charset($con,"utf8");
        return $con;
        // connect_db("client"); การเรียกใช้
    }
?>