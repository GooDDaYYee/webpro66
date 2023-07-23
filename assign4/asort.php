<html>
<head>
<title>การใช้ asort</title>
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
 
 asort($province); //เรียงข้อมูลจากมากไปน้อย
 for($i=0;$i<=4;$i++){
	echo $province[$i],"<br>";
 }
 ?>
</body>
</html>