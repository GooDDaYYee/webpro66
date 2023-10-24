<?php
    require("../require/connect_sql.php");
    $con=connect_db("server");

    if(isset($_FILES['product_pic']['name'])){
    $filename=$_FILES['product_pic']['name'];

    $filename=substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"),0,10)."_".$filename; //ชื่อไฟล์ใหม่

    $tmp_file=$_FILES['product_pic']['tmp_name'];

    copy($tmp_file,"../img/$filename"); //copy("ตำแหน่งไฟล์ต้นทาง","ตำแหน่งปลายทาง")
    }

    if(empty($_POST['product_ship'])){ //ถ้ามีการติ้ก checkbox
        $product_ship=0;
    }else{
        $product_ship=1;
    }

    mysqli_query($con,"INSERT INTO products (product_title,product_detail,product_nprice
    ,product_sprice,product_cate,product_pic,product_ship) VALUE ('$_POST[product_title]',
    '$_POST[product_detail]','$_POST[product_nprice]','$_POST[product_sprice]','$_POST[product_cate]',
    '$filename','$product_ship')") or die(mysqli_error($con));

    mysqli_close($con);
    header("Location:index.php?md=admin&action=manage_products&ck=checked'");
?>