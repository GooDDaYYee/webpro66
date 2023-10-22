<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");

    $del_id=$_POST['del_id'];
    $product_id=$_GET['id'];//รหัสสินค้าที่ส่งมากับสินค้า
    
    foreach($del_id as $product_id){
    //ดึงชื่อไฟล์ภาพสินค้าจากฐานข้อมูล
    $res=mysqli_query($con,"SELECT product_pic FROM products WHERE product_id='$product_id'") 
    or die(mysqli_error($con));
    list($product_pic)=mysqli_fetch_row($res);

    if(file_exists("../img/$product_pic")){ //ตรวจสอบว่ามีรูปภาพไหม
        unlink("../img/$product_pic"); //ลบไฟล์ภาพสินค้า
    }
    
    //ลบข้อมูลจากฐานข้อมูล
    mysqli_query($con,"DELETE FROM products WHERE product_id='$product_id'") 
    or die(mysqli_error($con));
    }
    mysqli_free_result($res);
    mysqli_close($con);
    header("Location:index.php?md=admin&action=manage_products&ck=checked'");
?>