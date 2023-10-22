<?php

if($_SESSION['user_level']!=1){
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    header("Location:../../index.php");
}

    require("../require/connect_sql.php");
    $con=connect_db("client");

    $product_id=$_GET['id'];//รหัสสินค้าที่ส่งมากับสินค้า
    //ดึงชื่อไฟล์ภาพสินค้าจากฐานข้อมูล
    $res=mysqli_query($con,"SELECT product_pic FROM products WHERE product_id='$product_id'") 
    or die(mysqli_error($con));
    list($product_pic)=mysqli_fetch_row($res);

    if(file_exists("../img/$product_pic")){ //ตรวจสอบว่ามีรูปภาพไหม
        unlink("../img/$product_pic"); //ลบไฟล์ภาพสินค้า
    }
    
    //ลบข้อมูลจากฐานข้อมูล
    $res=mysqli_query($con,"DELETE FROM products WHERE product_id='$product_id'") 
    or die(mysqli_error($con));
    
    mysqli_close($con);
    header("Location:index.php?md=admin&action=manage_products&ck=$chk'");
?>