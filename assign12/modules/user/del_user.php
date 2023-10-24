<?php
    require("../require/connect_sql.php");
    $con = connect_db("server");

    $del_id=$_POST['del_id'];
    $username = $_GET['username']; // รหัสสินค้าที่ส่งมากับสินค้า

    foreach($del_id as $username){
        // ลบข้อมูลจากฐานข้อมูล
        $res = mysqli_query($con, "DELETE FROM user WHERE username='$username'") or die(mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: index.php?md=user&action=manage_user&ck=checked");
?>
