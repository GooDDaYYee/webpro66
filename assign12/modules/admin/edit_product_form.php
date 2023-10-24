<html>
<head>
<title>ฟรอ์มแก้ไขสินค้า</title>
<meta charset="utf-8">
<style type="text/css">
    div{
        margin: 5px;
        padding: 5px;
    }
</style>
</head>
<body>
    <?php
    require("../require/connect_sql.php");
    $con=connect_db("client");
    $product_id=$_GET['id'];//รับค่ารหัสสินค้ามาจาก link
    $result=mysqli_query($con,"SELECT * FROM products WHERE product_id='$product_id'") or die("error1=".mysqli_error($con));

    list($product_id,$product_title,$product_detail,$product_nprice
    ,$product_sprice,$product_cate,$product_pic,$product_ship)=mysqli_fetch_row($result);
    ?>
    <h2>ฟรอ์มแก้ไขสินค้า</h2>
    <form method="post" action="index.php?md=admin&action=update_product" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $product_id?>">
        <div>*ชื่อสินค้า : <input type="text" name="product_title" size="80" require value="<?php 
        echo $product_title?>"></div>
        <div>*รายละเอียดสินค้า : 
            <textarea name="product_detail" cols="80" rows="10" require><?php 
        echo $product_detail?></textarea>
        </div>
        <div>*ราคาสินค้า : <input type="number" name="product_nprice" require value="<?php 
        echo $product_nprice?>"></div>
        <div>*ราคาสินค้าพิเศษ : <input type="number" name="product_sprice" require value="<?php 
        echo $product_sprice?>"></div>
        <div>*หมวดหมู่ : <select name="product_cate">
            <?php
            $cate=mysqli_query($con,"SELECT cate_id,cate_title FROM categories") or die(mysqli_error($con));
            while(list($cate_id,$cate_title)=mysqli_fetch_row($cate)){
                if($cate_id==$product_cate){//cate_idตรงกับproduct_cate
                    $sl="selected";
                }else{
                    $sl="";
                }
                echo "<option value=$cate_id $sl>$cate_title</option>";
            }
            ?>
                       </select>
        </div>
        <div>รูปภาพ : <input type="file" name="product_pic"></div>

        <?php
                if($product_ship==1){//cate_idตรงกับproduct_cate
                    $chk="checked";
                }else{
                    $chk="";
                }
            ?>
        <div><input type="checkbox" name="product_ship" value="1"<?php echo $chk?>>ส่งภายในประเทศ</div>
        <div><input style='background-color: green; border-color: green;' class='btn btn-primary' type="submit" name="bsubmit" value="แก้ไข">
            <input style='background-color: red; border-color: red;' class='btn btn-primary' type="reset" value="ยกเลิก">  
        </div>
    </form>
    หมายเหตุกรอกข้อมูลทุกช่องที่มีขึ้นเครื่องหมาย *
</body>
</html>