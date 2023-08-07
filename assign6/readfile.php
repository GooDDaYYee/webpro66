<html>
<head>
<title>อ่านข้อมูลไฟล์</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>

<?php
    $data=file("data.txt");//อ่านไฟล์แล้วส่งกลับในรูปแบบ Array โดยเก็บข้อความ 1 บรรทัดใน array 1 ช่อง
    foreach($data as $value){
        echo $value;
        echo "<hr>";
    }
?>
    <a href='post_form.php'>โพสต์ข้อความ</a>
</body>
</html>