<?php
    function menu(){
        if(empty($_SESSION['user_level'])){
            $level="";
        }else{
            $level=$_SESSION['user_level'];
        }
        if($level==1){
            echo "admin";
        }elseif($level==2){
            echo "member";
        }
        switch($level){
            case 1: admin_menu();
            break;
            case 2: member_menu();
            break;
            default: web_menu();
        }
    }

    function admin_menu(){
        echo "<h2>Admin Menu</h2>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=admin&action=manage_products'>จัดการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=manage_user'>จัดการผู้ใช้</a></li>";
        echo "<li><a href = 'index.php?md=user&action=logout'>ออกจากระบบ</a></li>";
        echo "</ul>";
    }
    function member_menu(){
        require_once("../require/connect_sql.php");
        $con=connect_db("client");
        $result=mysqli_query($con,"SELECT username FROM user") or die( mysqli_error($con));
        list($username) = mysqli_fetch_row($result);
        echo "<h2>Member Menu</h2>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=edit_user&user=$username'>แก้ไขข้อมูลผู้ใช้</a></li>";
        echo "<li><a href = 'index.php?md=user&action=logout'>ออกจากระบบ</a></li>";
        echo "</ul>";
        mysqli_close($con);
    }
    function web_menu(){
        echo "<h2>Web Menu</h2>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=add_user_member'>สมัครสมาชิก</a></li>";
        echo "</ul>";
    }
?>