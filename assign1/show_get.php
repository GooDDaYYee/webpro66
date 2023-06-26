<html>
    <head>
        <title>ฟรอ์มสำหรับส่งข้อมูลแบบ GET</title>
        <meta charset="UTF-8">
        <style>
            div{
                margin:20px;
            }
        </style>
</head>
<body>
<?php
    echo $_GET['membercode'],"<br>";//รหัสสมาชิก
    echo $_GET['membername'],"<br>";//ชื่อ
    echo $_GET['gender'],"<br>";//เพศ
    echo $_GET['address'],"<br>";//ที่อยู่
    echo $_GET['grad'],"<br>";//การศึกษา
?>
</body>
</html>