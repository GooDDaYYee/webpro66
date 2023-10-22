<?php
if($_SESSION['user_level']!="1"){ //ถ้าไม่ใช่ admin
    echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานหน้านี้')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>
<?php


        require("../require/connect_sql.php");
        $con=connect_db("client");
        mysqli_query($con,"UPDATE user SET username='$_POST[username]',
        passwd='$_POST[passwd]' WHERE username='$_POST[username]';") or die("sql1".mysqli_error($con));
    mysqli_close($con);
    header("Location:index.php?md=user&action=manage_user&ck=$chk");
    
?>