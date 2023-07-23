<html>
<head>
<title>การใช้ Range</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
 <?php
 $number=range(1,100); //เก็บตัสเลขตั้งแต่ 1 ถึง 100
 print_r($number); //แสดงโครงสร้างของข้อมูลใน arrey
 echo "<hr>";
 $cnt=count($number); //นับจำนวน elemaent
 for($i=0;$i<$cnt;$i++){
    echo $number[$i],"<br>";
 }
 echo "<hr>";

 $char=range("a","z");
 print_r($char); //แสดงโครงสร้างของข้อมูลใน arrey
 $cnt=count($char); //นับจำนวน elemaent
 for($i=0;$i<$cnt;$i++){
    echo $char[$i],"<br>";
 }
 echo "<hr>"
 ?>
</body>
</html>