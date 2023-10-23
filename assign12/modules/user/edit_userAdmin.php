<?php
require("../require/connect_sql.php");
$con = connect_db("client");
$username = $_GET['id'];
$result = mysqli_query($con, "SELECT username,passwd,level FROM user WHERE username='$username'") or die(mysqli_error($con));
list($username, $passwd, $level) = mysqli_fetch_row($result);
?>
<div id="login">
    <h2>แก้ไขข้อมูลส่วนตัว</h2>
    <form method="post" action="index.php?md=user&action=update_user">
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <div>Password: <input type="password" name="passwd" value="<?php echo $passwd; ?>" required></div>
        <div>*ตำแหน่ง: <select name="level">
                <?php
                require("../require/connect_sql.php");
                $con = connect_db("client");

                $cate = mysqli_query($con, "SELECT level_id,level_name FROM level") or die(mysqli_error($con));
                while (list($level_id, $level_name) = mysqli_fetch_row($cate)) {
                    if ($level_id == $level) {
                        $sl = "selected";
                    } else {
                        $sl = "";
                    }
                    echo "<option value='$level_id' $sl>$level_name</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <input class='btn btn-primary rounded-pill px-2' type="submit" value="Edit">
        </div>
    </form>
</div>
