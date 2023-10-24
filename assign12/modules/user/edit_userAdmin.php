<?php
require_once("../require/connect_sql.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $con = connect_db("server");
    $username = mysqli_real_escape_string($con, $_GET['id']);
    $result = mysqli_query($con, "SELECT username, passwd, level FROM user WHERE username='$username'") or die(mysqli_error($con));
    list($username, $passwd, $level) = mysqli_fetch_row($result);
}
?>

<div id="login">
    <h2>แก้ไขข้อมูลส่วนตัว</h2>
    <form method="post" action="index.php?md=user&action=update_user">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <div style="width: 300px;" class="form-floating">
            <input class="form-control" placeholder="Password" type="password" name="passwd" value="<?php echo htmlspecialchars($passwd); ?>" required>
            <label for="floatingInput">Password</label>
            <br>
        </div>
        <div>*ตำแหน่ง: 
            <select name="level">
                <?php
                // Reusing the existing database connection
                $cate = mysqli_query($con, "SELECT level_id, level_name FROM level") or die(mysqli_error($con));
                while (list($level_id, $level_name) = mysqli_fetch_row($cate)) {
                    $selected = ($level_id == $level) ? "selected" : "";
                    echo "<option value='" . htmlspecialchars($level_id) . "' $selected>" . htmlspecialchars($level_name) . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <input style='background-color: green; border-color: green;' class='btn btn-primary' type="submit" value="Edit">
        </div>
    </form>
</div>
