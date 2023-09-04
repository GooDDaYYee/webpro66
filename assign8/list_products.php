<html>
<head>
<title>แสดงรายการสินค้าทั้งหมด</title>
<meta charset="utf-8">
</head>
<body>
    <h1>รายการสินค้าในร้านค้าทั้งหมด</h1>
<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");
    $result=mysqli_query($con,"SELECT product_id,product_title,product_sprice FROM products") or die(mysqli_error($con));

    $rows=mysqli_num_rows($result);//นับจำนวนแถวที่ select ออกมาได้

    echo "<h2>จำนวนสินค้ามีทั้งหมด $rows รายการ</h2>";
    echo "<table border=1>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคาสินค้า</th></tr>";
    while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){
        echo "<tr><td>$product_id</td>";
        echo "<td><a href='products_detail.php?id=$product_id'>$product_title</a></td>";
        echo "<td>$product_sprice บาท</td></tr>";
    }
    echo "</table>";

    mysqli_close($con);// ปิดฐานข้อมูล
?>
</body>
</html>