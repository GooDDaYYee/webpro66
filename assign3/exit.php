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
 #for
 	$size=12; //กำหนดค่าเริ่มต้น 12
 	$red=255;
 	$green=0;
 	$blue=0;

 	for($r=1;$r<=10;$r++){

 	echo "<div style='font-size:$size","pt; color:rgb($red,$green,$blue)';>บรรทัดที่ $r Hello Web Programming</div>";
 	$size+=2; //เพิ่มค่าทีละ 2
 	$red-=23;
 	$green+=25;
 	$blue+=20;

    if($r==4){
        exit;
    }


 }
 	echo"<hr>";



 ?>
 

</body>
</html>