<html>
<head>
<title>แสดงรายการสินค้าทั้งหมด</title>
<meta charset="utf-8">
<style type="text/css">
    .pageno,.pagenow{
        padding:2px 10px;
        border: solid orange 1px;
        border-radius: 5px;
        margin: 5px;
        text-align: center;
    }
    .pagenow{
        background-color: orange;
        font-weight: bold;
        color:#fff;
    }
    .pagebar{
        margin:10px
    }
    .note{

    }
</style>
</head>
<body>
    <h1>รายการสินค้าในร้านค้าทั้งหมด</h1>
    <form method="get">
        <input type="search" name="keyword" size="80"> <input type="submit" name="ค้นหา">
    </form>
<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");

    if(empty($_GET['keyword'])){
        $keyword="";
    }else{
        $keyword=$_GET['keyword'];
    }
    //นับจำนวนรายการสินค้าทั้งหมด
        $result2=mysqli_query($con,"SELECT product_id FROM products
        WHERE product_title LIKE '%$keyword%' or product_detail LIKE '%$keyword%'") or die("error from q1".mysqli_error($con));

        if(empty($_GET['p_id'])){ //มีการคลิกลิงค์เลขหน้าหรือยัง
            $page_id=1;//กำหนดให้แสดงหน้า 1 เป็นหน้าแรก
        }else{
            $page_id=$_GET['p_id'];
        }//หมายเลขหน้ารับมาจากlikeเลขหน้า

        $allrows=mysqli_num_rows($result2); // นับจำนวนแถวทั้งหมด
        $rows_per_page=15;//จำนวนแถวต่อ1หน้า
        $pages=ceil($allrows/$rows_per_page);//ceilปัดเศษขึ้น
        $start_row=($page_id-1)*$rows_per_page;//คำนวณหาแถวแรก

    //แสดงรายการสินค้า
    $result=mysqli_query($con,"SELECT product_id,product_title,product_sprice FROM products 
    WHERE product_title LIKE '%$keyword%' or product_detail LIKE '%$keyword%'LIMIT $start_row,$rows_per_page") or die("error from q2".mysqli_error($con));

    $rows=mysqli_num_rows($result);//นับจำนวนแถวที่ select ออกมาได้
    echo "<h3>จำนวนสินค้ามีทั้งหมด $rows รายการ</h3>";
        if($page_id!=1){
            echo "<span><a href='list_products.php?p_id=",$page_id-1,"&keyword=$keyword'>[<]</span>";
        }

    for($i=1;$i<=$pages;$i++){
        if($page_id==$i){//ตรวจสอบว่าอยู่หน้าไหนแล้วให้ทำตัวหนังสือเป็นสี
            echo "<span class='pagenow'>$i</span>";
        }else{
            echo "<span class='pageno'><a href='list_products.php?p_id=$i&keyword=$keyword'>$i</a></span>";
        }
    }
    if($page_id!=$pages){
            echo "<span><a href='list_products.php?p_id=",$page_id+1,"&keyword=$keyword'>[>]</span>";
        }

    if($rows>0){
        echo "<table border=1>";
        echo "<tr><th>รหัสสินค้า</th><th width=700>ชื่อสินค้า</th><th>ราคาสินค้า</th></tr>";
        while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){
        echo "<tr><td>$product_id</td>";
        echo "<td><a href='products_detail.php?id=$product_id'>$product_title</a></td>";
        echo "<td>$product_sprice บาท</td></tr>";
    }
    echo "</table>";
    }else{
    echo "<div>-ไม่มีสินค้าที่ตรงกับการค้นหาของคุณ-</div>";
    }
    mysqli_close($con);// ปิดฐานข้อมูล
?>
</body>
</html>