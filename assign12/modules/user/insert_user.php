<form method="get">
        <input type="hidden" name='md' value="admin">
        <input type="hidden" name='action' value="manage_products">
</form>
<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");

    mysqli_query($con,"INSERT INTO user (username,passwd,level) VALUE ('$_POST[username]',
    '$_POST[passwd]','$_POST[level]')") or die(mysqli_error($con));

    mysqli_close($con);
    header("Location:index.php");
?>