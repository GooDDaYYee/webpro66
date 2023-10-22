<?php
require("../require/connect_sql.php");
$con=connect_db("client");
$username2=$_SESSION['valid_login'];
$result=mysqli_query($con,"SELECT username,passwd FROM user WHERE username='$username2'") or die( mysqli_error($con));
list($username,$passwd) = mysqli_fetch_row($result);
?>
<div id="login">
<h2>แก้ไขข้อมูลส่วนตัว</h2>
<form method="post" action="index.php?md=user&action=update_user" >
    <div>Username : <input type="text" name="username" value="<?php echo $username ?>"></div>
    <div>Password : <input type="password" name="passwd" required ></div>
    <div>
        <input type="submit" value="Edit">
    </div>
</form>