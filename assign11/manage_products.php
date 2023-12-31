<html>
<head>
<title>จัดการข้อมูลสินค้า</title>
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
    WHERE product_title LIKE '%$keyword%' or product_detail LIKE '%$keyword%' ORDER BY product_id
    DESC LIMIT $start_row,$rows_per_page") or die("error from q2".mysqli_error($con));

    $rows=mysqli_num_rows($result);//นับจำนวนแถวที่ select ออกมาได้
        if($page_id!=1){
            echo "<span><a href='manage_products.php?p_id=",$page_id-1,"&keyword=$keyword'>[<]</a></span>";
        }

    for($i=1;$i<=$pages;$i++){
        if($page_id==$i){//ตรวจสอบว่าอยู่หน้าไหนแล้วให้ทำตัวหนังสือเป็นสี
            echo "<span class='pagenow'>$i</span>";
        }else{
            echo "<span class='pageno'><a href='manage_products.php?p_id=$i&keyword=$keyword'>$i</a></span>";
        }
    }
    if($page_id!=$pages){
            echo "<span><a href='manage_products.php?p_id=",$page_id+1,"&keyword=$keyword'>[>]</a></span>";
        }

    if($rows>0){
        if(!empty($_GET['ck'])){
            $chk="checked";
            $text="ไม่เลือก";
        }else{
            $chk="";
            $text="เลือกทั้งหมด";
        }
        echo "<form method='post' action='multi_del.php'>";
        echo "<h3>จำนวนสินค้ามีทั้งหมด $allrows รายการ</h3>";
        echo "<table border=1>";
        echo "<tr><th width=100><a href='?ck=$chk'>$text</a></th><th>รหัสสินค้า</th><th width=700>ชื่อสินค้า</th><th>ราคาสินค้า</th>
        <th>แก้ไข</th><th>ลบ</th></tr>";
        while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){
        echo "<tr><td><input type='checkbox' name='del_id[]' value='$product_id' $chk></td><td>$product_id</td>";
        echo "<td><a href='products_detail.php?id=$product_id'>$product_title</a></td>";
        echo "<td>$product_sprice บาท</td>";

        echo "<td align='center'><a href='edit_product_form.php?id=$product_id'><img src='../img/b_edit.png'></a></td>";
        echo "<td align='center'><a href='delete_product.php?id=$product_id' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'><img src='../img/b_drop.png'</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='submit' value='ลบสินค้าที่เลือก' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'>";
    echo "<a href='add_product_form.php'><input type='button' value='เพิ่มสินค้า'></a>";
    echo "</form>";
    }else{
    echo "<div>-ไม่มีสินค้าที่ตรงกับการค้นหาของคุณ-</div>";
    }
    mysqli_close($con);// ปิดฐานข้อมูล
?>
</body>
</html>