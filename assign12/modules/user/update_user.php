<?php
if ($_SESSION['user_level'] != "1"&&$_SESSION['user_level'] != "2") { //ถ้าไม่ใช่ admin
    echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานหน้านี้')</script>";
    echo "<script>window.location='index.php'</script>";
} else {
    require("../require/connect_sql.php");
    $con = connect_db("client");
    
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        mysqli_query($con, "UPDATE user SET passwd='$_POST[passwd]', level='$_POST[level]' WHERE username='$username';") or die("sqli" . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location:index.php");
}

?>