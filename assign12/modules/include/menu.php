<?php
    function menu(){
        if(empty($_SESSION['user_level'])){
            $level="";
        }else{
            $level=$_SESSION['user_level'];
        }
        echo $level;
        switch($level){
            case "admin": admin_menu();
            break;
            case "member": member_menu();
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
        echo "<h2>Member Menu</h2>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=edit_user_form'>แก้ไขข้อมูลผู้ใช้</a></li>";
        echo "<li><a href = 'index.php?md=user&action=logout'>ออกจากระบบ</a></li>";
        echo "</ul>";
    }
    function web_menu(){
        echo "<h2>Web Menu</h2>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=add_user_form'>สมัครสมาชิก</a></li>";
        echo "</ul>";
    }
?>