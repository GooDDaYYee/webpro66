<html>
<head>
<title>ฟรอ์มสำหรับเพิ่มสินค้า</title>
<meta charset="utf-8">
<style type="text/css">
    div{
        margin: 5px;
        padding: 5px;
    }
</style>
</head>
<body>
    <h1>ฟรอ์มเพิ่มสินค้า</h1>
    <form method="post" action="insert_product.php" enctype="multipart/form-data">
        <div>*ชื่อสินค้า : <input type="text" name="product_title" size="80" require></div>
        <div>*รายละเอียดสินค้า : 
            <textarea name="product_detail" cols="80" rows="10" require></textarea>
        </div>
        <div>*ราคาสินค้า : <input type="number" name="product_nprice" require></div>
        <div>*ราคาสินค้าพิเศษ : <input type="number" name="product_sprice" require></div>
        <div>*หมวดหมู่ : <select name="product_cate">
            <?php
            require("../require/connect_sql.php");
            $con=connect_db("client");

            $cate=mysqli_query($con,"SELECT cate_id,cate_title FROM categories") or die(mysqli_error($con));
            while(list($cate_id,$cate_title)=mysqli_fetch_row($cate)){
                echo "<option value=$cate_id>$cate_title</option>";
            }
            ?>
                       </select>
        </div>
        <div>รูปภาพ : <input type="file" name="product_pic"></div>
        <div><input type="checkbox" name="product_ship" value="1">ส่งภายในประเทศ</div>
        <div><input type="submit" name="bsubmit" value="เพิ่มสินค้า">
            <input type="reset" value="ยกเลิก">  
        </div>
    </form>
    หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *
</body>
</html>