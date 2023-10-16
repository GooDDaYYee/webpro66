<h1>ฟรอ์มเพิ่มสินค้า</h1>
    <form method="post" action="index.php?md=user&action=insert_user" enctype="multipart/form-data">
        <div>*Username : <input type="text" name="username" require></div>
        <div>*Password : <input type="Password" name="passwd" require></div>
        <div>*ตำแหน่ง : <select name="product_cate">
            <?php
            require("../require/connect_sql.php");
            $con=connect_db("client");

            $cate=mysqli_query($con,"SELECT level_id,level_name FROM level") or die(mysqli_error($con));
            while(list($level_id,$level_name)=mysqli_fetch_row($cate)){
                echo "<option value=$level_id>$level_name</option>";
            }
            ?>
                       </select>
        </div>
        <div>
            <input type="submit" name="bsubmit" value="เพิ่มUser">
            <input type="reset" value="ยกเลิก">  
        </div>
    </form>
    หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *