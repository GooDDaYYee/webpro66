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
        <div style="width: 300px;" class="form-floating"><input class="form-control" placeholder="Password" type="password" name="passwd" value="<?php echo $passwd; ?>" required>
        <label for="floatingInput">Password</label>
        </div>
        <br>
        <input type="hidden" name="level" value="2">
        <div>
            <input style='background-color: green; border-color: green;' class='btn btn-primary' type="submit" value="Edit">
        </div>
    </form>
</div>
