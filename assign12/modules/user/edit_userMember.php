<?php
require("../require/connect_sql.php");
$con = connect_db("client");
$username = $_GET['username'];
$result = mysqli_query($con, "SELECT passwd,level FROM user WHERE username='$username'") or die(mysqli_error($con));
list($passwd) = mysqli_fetch_row($result);
?>
<div id="login">
    <h2>แก้ไขข้อมูลส่วนตัว</h2>
    <form method="post" action="index.php?md=user&action=update_user">
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <div>Password: <input type="password" name="passwd" value="<?php echo $passwd; ?>" required></div>
        <input type="hidden" name="level" value="2">
        <div>
            <input class='btn btn-primary rounded-pill px-2' type="submit" value="Edit">
        </div>
    </form>
</div>
