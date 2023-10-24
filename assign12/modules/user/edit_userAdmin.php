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
        <div style="width: 300px;" class="form-floating"><input class="form-control" placeholder="Password" type="password" name="passwd" value="<?php echo $passwd; ?>" required>
        <label for="floatingInput">Password</label>
        <br>
        </div>
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
            <input style='background-color: green; border-color: green;' class='btn btn-primary' type="submit" value="Edit">
        </div>
    </form>
</div>
