<form method="get">
        <input type="hidden" name='md' value="admin">
        <input type="hidden" name='action' value="manage_products">
</form>
<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");

    $username=$_GET['id'];//รหัสสินค้าที่ส่งมากับสินค้า
    
    //ลบข้อมูลจากฐานข้อมูล
    $res=mysqli_query($con,"DELETE FROM user WHERE username='$username'") 
    or die(mysqli_error($con));
    
    mysqli_close($con);
    header("Location:index.php?md=user&action=manage_user");
?>