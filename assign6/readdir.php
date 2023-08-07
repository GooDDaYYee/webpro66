<html>
<head>
<title>อ่านข้อมูลในโฟเดอร์</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
<?php
    $dirname="../assign5";
    echo "<h1>อ่านข้อมูลในโฟลเดอร์ชื่อ $dirname</h1>";
    $dir=opendir($dirname);//เปิดโฟลเดอร์
    while($data=readdir($dir)){//อ่านข้อมูล
        echo $data,"<br>";
    }
    echo "<hr>";
    closedir($dir);//ปิโฟลเดอร์

?>
</body>
</html>