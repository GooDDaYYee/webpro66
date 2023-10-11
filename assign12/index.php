<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการข้อมูลสินค้า</title>
    <link rel="stylesheet" href = "layout.css">
</head>
<body>
    <div id = "container">
        <header>
            <h1>Product Data Management System </h1>
        </header>
            <div id ="leftside">
                <?php
                if(empty($_SESSION['valid_login'])){
                    include("modules/user/login_form.php");
                }else{
                    echo "<div style='text-align: center;'>Username :",$_SESSION['valid_login'],"
                    <a href='index.php?md=user&action=logout'>[logout]</a></div>";
                }
                include("modules/include/menu.php");
                    menu();
                ?>
                    
            </div>
            </div>
            <div id ="main">
                <?php
                if(empty($_GET['md'])){
                    $folder_name="home";
                    $file_name="home"; //หน้าแรก
                }else{
                    $folder_name=$_GET['md']; //ชื่อโฟลเดอร์
                    $file_name=$_GET['action']; //ชื่อไฟล์ 
                }
                    include("modules/$folder_name/$file_name.php");
                ?>
            </div>
            <footer>
                copyright&copy;2023,ALLright Reserved
            </footer>

    </div>
</body>
</html>