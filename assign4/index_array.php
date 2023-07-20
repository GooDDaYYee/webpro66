<html>
<head>
<title>การใช้ loop แสดงข้อความตามจำนวนรอบที่กำหนด</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
 <?php
 $province=array("เชียงใหม่","ลำพูน","ลำปาง","พะเยา","แพร่");
 $province2=["เชียงใหม่","ลำพูน","ลำปาง","พะเยา","แพร่"];
 $province3[]="น่าน";
 $province3[]="เชียงราย";

 echo $province2[0],"<br>";
 echo $province2[1],"<br>";
 echo $province2[2],"<br>";
 echo $province2[3],"<br>";
 echo $province2[4],"<br>";

 $cnt=count($province2);

 for($i=0;$i<=4;$i++){
	echo $province2[$i],"<br>";
 }
 ?>
</body>
</html>