<?php
    $text=$_POST['text1'];//รับข้อความมาจากฟอร์ม
    $dir=fopen("data.txt","a");
    fwrite($dir,$text);//เขียนข้อความในไฟล์แบบเขียนทับ คือโหมด w
    fwrite($dir,$text."\n");
    fclose($dir);//ปิดไฟล์
    header("Location:readfile.php");
?>