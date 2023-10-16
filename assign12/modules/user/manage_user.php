<?php

//หน้านี้จะเข้าได้ก่ต่อเมื่อล็อกอินเป็น level admin เท่านั้น
if($_SESSION['user_level']!="admin"){
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    header("Location:../../index.php");
}
?>
<form method="get">
        <input type="hidden" name='md' value="user">
        <input type="hidden" name='action' value="manage_user">
</form>
<h1>รายการUserทั้งหมด</h1>
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
       $result2=mysqli_query($con,"SELECT username FROM user
       WHERE level LIKE '%$keyword%'") or die("error from q1".mysqli_error($con));

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
   $result=mysqli_query($con,"SELECT username,passwd,level FROM user 
   WHERE level LIKE '%$keyword%' ORDER BY username
   DESC LIMIT $start_row,$rows_per_page") or die("error from q2".mysqli_error($con));
    echo "<h3>จำนวน User ทั้งหมด $allrows รายการ</h3>";
   $rows=mysqli_num_rows($result);//นับจำนวนแถวที่ select ออกมาได้
       if($page_id!=1){
           echo "<span><a href='index.php?md=admin&action=manage_user&p_id=",$page_id-1,"&keyword=$keyword'>[<]</a></span>";
       }
   for($i=1;$i<=$pages;$i++){
       if($page_id==$i){//ตรวจสอบว่าอยู่หน้าไหนแล้วให้ทำตัวหนังสือเป็นสี
           echo "<span class='pagenow'>$i</span>";
       }else{
           echo "<span class='pageno'><a href='index.php?md=admin&action=manage_user&p_id=$i&keyword=$keyword'>$i</a></span>";
       }
   }
   if($page_id!=$pages){
           echo "<span><a href='index.php?md=admin&action=manage_user&p_id=",$page_id+1,"&keyword=$keyword'>[>]</a></span>";
       }

   if($rows>0){
       if(!empty($_GET['ck'])){
           $chk="checked";
           $text="ไม่เลือก";
       }else{
           $chk="";
           $text="เลือกทั้งหมด";
       }
       echo "<form method='post' action='index.php?md=admin&action=multi_del'>";
       echo "<table border=1>";
       echo "<tr><th width=100><a href='?ck=$chk'>$text</a></th><th>Username</th><th>Password</th><th>Level</th>
       <th>แก้ไข</th><th>ลบ</th></tr>";
       while(list($username,$passwd,$level)=mysqli_fetch_row($result)){
       echo "<tr><td><input type='checkbox' name='del_id[]' value='$username' $chk></td><td>$username</td>";
       echo "<td>$passwd</td>";
        if($level==0){
            echo "<td>admin</td>";
           }else{
            echo "<td>member</td>";
           }
       echo "<td align='center'><a href='index.php?md=user&action=edit_user&id=$username'><img src='../img/b_edit.png'></a></td>";
       echo "<td align='center'><a href='index.php?md=user&action=del_user&id=$username' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'><img src='../img/b_drop.png'</a></td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "<input type='submit' value='ลบสินค้าที่เลือก' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'>";
   echo "<a href='index.php?md=user&action=add_user'><input type='button' value='เพิ่มUser'></a>";
   echo "</form>";
   }else{
   echo "<div>-ไม่มีสินค้าที่ตรงกับการค้นหาของคุณ-</div>";
   }
   mysqli_close($con);// ปิดฐานข้อมูล
?>