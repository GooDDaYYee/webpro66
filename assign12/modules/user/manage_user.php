
<?php

//หน้านี้จะเข้าได้ก่ต่อเมื่อล็อกอินเป็น level admin เท่านั้น
if($_SESSION['user_level']!=1){
    echo "<script>alert('คุณไม่มีสิทธิการเข้าใช้งานในหน้านี้');</script>";
    header("Location:../../index.php");
}
?>
<form method="get">
    <input type="hidden" name='md' value="user">
    <input type="hidden" name='action' value="manage_user">
    <h2>รายการสินค้าในร้านค้าทั้งหมด</h2>
    <input type="search" name="keyword" size="80" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
    <input class='btn btn-primary rounded-pill px-2' type="submit" name="ค้นหา" value="ค้นหา">
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
       WHERE username LIKE '%$keyword%'") or die("error from q1".mysqli_error($con));

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
   WHERE username LIKE '%$keyword%' ORDER BY username
   DESC LIMIT $start_row,$rows_per_page") or die("error from q2".mysqli_error($con));
    
   $rows=mysqli_num_rows($result);//นับจำนวนแถวที่ select ออกมาได้
   echo "<div class = 'pagebar'>";
       if($page_id!=1){
           echo "<span><a href='index.php?md=admin&action=manage_user&p_id=",$page_id-1,"&keyword=$keyword&ck=checked'>[<]</a></span>";
       }
   for($i=1;$i<=$pages;$i++){
       if($page_id==$i){//ตรวจสอบว่าอยู่หน้าไหนแล้วให้ทำตัวหนังสือเป็นสี
           echo "<span class='pagenow'>$i</span>";
       }else{
           echo "<span class='pageno'><a href='index.php?md=admin&action=manage_user&p_id=$i&keyword=$keyword&ck=checked'>$i</a></span>";
       }
   }
   if($page_id!=$pages){
           echo "<span><a href='index.php?md=admin&action=manage_user&p_id=",$page_id+1,"&keyword=$keyword&ck=checked'>[>]</a></span>";
       }
       echo "</div>";
       if($rows>0){ //ถ้าสินค้ามีจำนวนมากว่า 0 
        if (!empty($_GET['ck'])) {
            $chk="";
            $text="เลือกทั้งหมด"; 
        }else{
            $chk="checked";
            $text="ไม่เลือก";
        }
       echo "<form method='post' action='index.php?md=user&action=del_user'>";
       echo "<h3>จำนวน User ทั้งหมด $allrows รายการ</h3>";
       echo "<table border=1 class='table'>";
       echo "<tr><th width=110><a href='index.php?md=user&action=manage_user&ck=$chk'>$text</a></th><th>Username</th><th>Password</th><th>Level</th>
       <th>แก้ไข</th><th>ลบ</th></tr>";
       while(list($username,$passwd,$level)=mysqli_fetch_row($result)){
       echo "<tr><td><input type='checkbox' name='del_id[]' value='$username' $chk></td><td>$username</td>";
       echo "<td>$passwd</td>";
        if($level==1){
            echo "<td>admin</td>";
           }else{
            echo "<td>member</td>";
           }
       echo "<td align='center'><a href='index.php?md=user&action=edit_userAdmin&id=$username'><img src='../img/b_edit.png'></a></td>";
       echo "<td align='center'><a href='index.php?md=user&action=delete_user&id=$username' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'><img src='../img/b_drop.png'</a></td>";
       echo "</tr>";
   }
   echo "</table>";
   echo "<input style='background-color: red; border-color: red;' class='btn btn-primary rounded-pill px-2' type='submit' value='ลบUserทั้งหมด' onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าจะลบรายการสินค้านี้ !!!\")'>";
   echo " ";
   echo "<a href='index.php?md=user&action=add_user'><input style='background-color: green; border-color: green;' class='btn btn-primary rounded-pill px-2' type='button' value='เพิ่มUser'></a>";
   echo "</form>";
   }else{
   echo "<div>-ไม่มีสินค้าที่ตรงกับการค้นหาของคุณ-</div>";
   }
   mysqli_close($con);// ปิดฐานข้อมูล
?>