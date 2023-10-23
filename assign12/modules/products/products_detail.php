<?php
if(empty($_SESSION['valid_login'])){
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    echo "<script>window.location='index.php'</script>";
    exit;
}

require("../require/connect_sql.php");
$con=connect_db("client");
$product_id = $_GET['id']; // รับค่ารหัสสินค้ามาจาก link
$result = mysqli_query($con,"SELECT * FROM products WHERE product_id='$product_id'") or die("error1=".mysqli_error($con));

list($product_id, $product_title, $product_detail, $product_nprice, $product_sprice, $product_cate, $product_pic, $product_ship) = mysqli_fetch_row($result);
echo "<h2>$product_title</h2>";
echo "<img src='../img/$product_pic' width=250>";
echo "<div>รหัสสินค้า : $product_id</div>";
echo "<h3>รายละเอียด :</h3>";
echo "<p>$product_detail</p>";
echo "<div>ราคาปกติ : $product_nprice</div>";
echo "<div>ราคาพิเศษ : $product_sprice</div>";

$result2 = mysqli_query($con,"SELECT cate_title FROM categories WHERE cate_id='$product_cate'") or die("error2=".mysqli_error($con));
list($product_cate) = mysqli_fetch_row($result2);
echo "<div>หมวดหมู่สินค้า : $product_cate</div>";
echo "<div>การขนส่ง : " . ($product_ship == 1 ? 'ส่งภายในประเทศ' : 'ส่งจากต่างประเทศ') . "</div>";
echo "<hr>";

mysqli_free_result($result);
mysqli_close($con); // ปิดฐานข้อมูล
?>
