<h2>ฟอร์มเพิ่มUser</h2>
    <form method="post" action="index.php?md=user&action=insert_user" enctype="multipart/form-data">
        <div>*Username : <input type="text" name="username" require></div>
        <div>*Password : <input type="Password" name="passwd" require></div>
        <div>*ตำแหน่ง : <select name="level">
            <?php
            require("../require/connect_sql.php");
            $con=connect_db("server");

            $cate=mysqli_query($con,"SELECT level_id,level_name FROM level") or die(mysqli_error($con));
            while(list($level_id,$level_name)=mysqli_fetch_row($cate)){
                echo "<option value=$level_id>$level_name</option>";
            }
            ?>
                       </select>
        </div>
        <div>
            <input style='background-color: green; border-color: green;' class="btn btn-primary" type="submit" name="bsubmit" value="เพิ่มUser">
            <input style='background-color: red; border-color: red;' class="btn btn-primary" type="reset" value="ยกเลิก">  
        </div>
    </form>
    หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *