<?php
    require("../require/connect_sql.php");
    $con=connect_db();
    $form_username=$_POST['username'];
    $form_passwd=$_POST['passwd'];

    $user=mysqli_query($con,"SELECT username,passwd,level FROM user 
    WHERE username='$form_username' AND passwd='$form_passwd'");

    list($db_username,$db_passwd,$level)=mysqli_fetch_row($user,);
    if($db_username==$form_username AND $db_passwd==$form_passwd){
        $_SESSION['valid_login']=$db_username;
        $_SESSION['user_level']=$level;
        // echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบ');</script>";
    }else{
        $_SESSION['valid_login']="";
        $_SESSION['user_level']="";
        echo "<script>alert('Username หรือ Password ไม่ถูกต้องกรุณา Login ใหม่');</script>";
    }
    header("Location:index.php");
?>