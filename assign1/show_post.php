<html>
    <head>
        <title>ฟรอ์มสำหรับส่งข้อมูลแบบ POST</title>
        <meta charset="UTF-8">
        <style>
            div{
                margin:20px;
            }
        </style>
</head>
<body>
<?php
    echo $_POST['membercode'],"<br>";//รหัสสมาชิก
    echo $_POST['membername'],"<br>";//ชื่อ
    echo $_POST['gender'],"<br>";//เพศ
    echo $_POST['address'],"<br>";//ที่อยู่
    echo $_POST['grad'],"<br>";//การศึกษา

    echo "<h2>ข้อมูลไฟล์</h2>";
    echo "ชื่อไฟล์ :",$_FILES['photo']['name'],"<br>";
    echo "ตำแหน่งไฟล์ชั่วคราว :",$_FILES['photo']['tmp_name'],"<br>";
    echo "ตำแหน่งไฟล์ :",$_FILES['photo']['type'],"<br>";
    echo "ความจุไฟล์ :",$_FILES['photo']['size'],"Byte<br>";
    echo "รหัส error :",$_FILES['photo']['error'],"<br>";
    echo "<hr> :";
?>
</body>
</html>