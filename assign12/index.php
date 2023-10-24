<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการข้อมูลสินค้า</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="layout2.css">
</head>
<body>
    <div id="container">
        <header class="p-3 text-center">
            <marquee>Product Data Management System</marquee>
        </header>
        <div id="leftside">
            <?php
            if (empty($_SESSION['valid_login'])) {
                include("modules/user/login_form.php");
            } else {
                if (isset($_SESSION['valid_login'])) {
                    echo "<div style='text-align: center;'>Username : " . $_SESSION['valid_login'] . "
                    <a href='index.php?md=user&action=logout'>[logout]</a></div>";
                }
            }
            include("modules/include/menu.php");
            menu();
            ?>
        </div>
        <div id="main">
            <?php
            if (empty($_GET['md'])) {
                $folder_name = "home";
                $file_name = "home"; //หน้าแรก
            } else {
                $folder_name = $_GET['md']; //ชื่อโฟลเดอร์
                $file_name = $_GET['action']; //ชื่อไฟล์ 
            }
            include("modules/$folder_name/$file_name.php");
            ?>
        </div>
        <footer>
            &copy; 2023, ALL right Reserved
        </footer>
    </div>
</body>
</html>
