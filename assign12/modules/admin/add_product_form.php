<?php
if ($_SESSION['user_level'] != 1) {
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    header("Location:../../index.php");
}
?>
<h2>ฟรอ์มเพิ่มสินค้า</h2>
<form method="post" action="index.php?md=admin&action=insert_product" enctype="multipart/form-data">
    <div>*ชื่อสินค้า : <input type="text" name="product_title" size="80" require></div>
    <div>*รายละเอียดสินค้า :
        <textarea name="product_detail" cols="80" rows="10" require></textarea>
    </div>
    <div>*ราคาสินค้า : <input type="number" name="product_nprice" require></div>
    <div>*ราคาสินค้าพิเศษ : <input type="number" name="product_sprice" require></div>
    <div>*หมวดหมู่ : <select name="product_cate">
            <?php
            require("../require/connect_sql.php");
            $con = connect_db("server");

            $cate = mysqli_query($con, "SELECT cate_id,cate_title FROM categories") or die(mysqli_error($con));
            while (list($cate_id, $cate_title) = mysqli_fetch_row($cate)) {
                echo "<option value=$cate_id>$cate_title</option>";
            }
            ?>
        </select>
    </div>
    <div>รูปภาพ : <input type="file" name="product_pic"></div>
    <div><input type="checkbox" name="product_ship" value="1">ส่งภายในประเทศ</div>
    <div><input style='background-color: green; border-color: green;' class="btn btn-primary" type="submit" name="bsubmit" value="เพิ่มสินค้า">
        <input style='background-color: red; border-color: red;' class="btn btn-primary" type="reset" value="ยกเลิก">
    </div>
</form>
หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *