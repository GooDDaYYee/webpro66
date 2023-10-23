<?php
    function menu(){
        if(empty($_SESSION['user_level'])){
            $level="";
        }else{
            $level=$_SESSION['user_level'];
        }
        if($level==1){
            echo "<div style='text-align: center;'>สถานะ : admin</div>";
        }elseif($level==2){
            echo "<div style='text-align: center;'>สถานะ : member</div>";
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
        echo "<h4>Admin Menu</h4>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=admin&action=manage_products&ck=checked'>จัดการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=manage_user&ck=checked'>จัดการผู้ใช้</a></li>";
        echo "<li><a href = 'index.php?md=user&action=logout'>ออกจากระบบ</a></li>";
        echo "</ul>";
    }
    function member_menu(){
        $username=$_SESSION['valid_login'];
        echo "<h4>Member Menu</h4>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href='index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href='index.php?md=user&action=edit_userMember&username=$username'>แก้ไขข้อมูลผู้ใช้</a></li>";
        echo "<li><a href='index.php?md=user&action=logout'>ออกจากระบบ</a></li>";
        echo "</ul>";
    }
    
    function web_menu(){
        echo "<h4>Web Menu</h4>";
        echo "<ul>";
        echo "<li><a href='index.php'>หน้าแรก</a></li>";
        echo "<li><a href = 'index.php?md=products&action=list_products'>รายการสินค้า</a></li>";
        echo "<li><a href = 'index.php?md=user&action=add_user_member'>สมัครสมาชิก</a></li>";
        echo "</ul>";
    }
?>