<?php
//หน้านี้จะเข้าได้ก่ต่อเมื่อล็อกอินเป็น level admin เท่านั้น
if($_SESSION['user_level']!=1){
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    header("Location:../../index.php");
}
?>
<form method="get">
        <input type="hidden" name='md' value="admin">
        <input type="hidden" name='action' value="manage_products">
</form>
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
   
   echo "<div class = 'pagebar'>";
       if($page_id!=1){
           echo "<span><a href='index.php?md=admin&action=manage_products&p_id=",$page_id-1,"&keyword=$keyword&ck=checked'>[<]</a></span>";
       }
   for($i=1;$i<=$pages;$i++){
       if($page_id==$i){//ตรวจสอบว่าอยู่หน้าไหนแล้วให้ทำตัวหนังสือเป็นสี
           echo "<span class='pagenow'>$i</span>";
       }else{
           echo "<span class='pageno'><a href='index.php?md=admin&action=manage_products&p_id=$i&keyword=$keyword&ck=checked'>$i</a></span>";
       }
   }
   if($page_id!=$pages){
           echo "<span><a href='index.php?md=admin&action=manage_products&p_id=",$page_id+1,"&keyword=$keyword&ck=checked'>[>]</a></span>";
       }
       echo "</div>";
   if($rows>0){ //ถ้าสินค้ามีจำนวนมากว่า 0 
        if (!empty($_GET['ck'])){
            $chk = "";
            $text = "เลือกทั้งหมด";
        } else{
            $chk = "checked";
            $text = "ไม่เลือก";
        }
       echo "<form method='post' action='index.php?md=admin&action=multi_del'>";
       echo "<h3>จำนวนสินค้ามีทั้งหมด $allrows รายการ</h3>";
       echo "<table border=1>";
       echo "<tr><th width=100><a href='?md=admin&action=manage_products&ck=$chk'>$text</a></th><th>รหัสสินค้า</th><th width=700>ชื่อสินค้า</th><th>ราคาสินค้า</th>
       <th>แก้ไข</th><th>ลบ</th></tr>";
       while(list($product_id,$product_title,$product_sprice)=mysqli_fetch_row($result)){
        echo "<tr><td><input type='checkbox' name='del_id[]' value='$product_id' $chk></td><td>$product_id</td>";
       echo "<td><a href='index.php?md=admin&action=products_detail&id=$product_id'>$product_title</a></td>";
       echo "<td>$product_sprice บาท</td>";

       echo "<td align='center'><a href='index.php?md=admin&action=edit_product_form&id=$product_id'><img src='../img/b_edit.png'></a></td>";
       echo "<td align='center'><a href='index.php?md=admin&action=delete_product&id=$product_id' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'><img src='../img/b_drop.png'</a></td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "<input type='submit' value='ลบสินค้าที่เลือก' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'>";
   echo "<a href='index.php?md=admin&action=add_product_form'><input type='button' value='เพิ่มสินค้า'></a>";
   echo "</form>";
   }else{
   echo "<div>-ไม่มีสินค้าที่ตรงกับการค้นหาของคุณ-</div>";
   }
   mysqli_close($con);// ปิดฐานข้อมูล
?>