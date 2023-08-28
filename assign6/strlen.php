<html>
<head>
<title>strlen</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
    <h1>ฟังก์ชั่นในการตัดตัวอักษรหน้าหลัง strlen</h1>
<?php
    $text="        PHP Web Programming        ";
    $cnttext=strlen($text); //นับจำนวนตัวอักษรในสติง
    echo "จำนวนตัวอักษรในสติงมีจำนวน=",$cnttext,"ตัวอักษร";
    echo "<hr>";
    $text2=trim($text);//ตัดช่องว่างในสตริงด้านหน้าด้านหลัง
    $cnttext2=strlen($text2);//นับจำนวนตัวอักษรในตริง
    echo "จำนวนตัวอักษรในสตริง หลังจากตัดช่องว่างด้านหน้าและด้านหลัง มีจำนวน = ",$cnttext2," ตัวอักษร";
    echo "<hr>";
    $text3=ltrim($text);//ตัดช่องว่างในสตริงด้านหน้า
    $cnttext3=strlen($text3);//นับจำนวนตัวอักษรในตริง
    echo "จำนวนตัวอักษรในสตริง หลังจากตัดช่องว่างด้านหน้า มีจำนวน = ",$cnttext3," ตัวอักษร";
    echo "<hr>";
    $text4=chop($text);//ตัดช่องว่างในสตริงด้านหลัง
    $cnttext4=strlen($text4);//นับจำนวนตัวอักษรในตริง
    echo "จำนวนตัวอักษรในสตริง หลังจากตัดช่องว่างด้านหลัง มีจำนวน = ",$cnttext4," ตัวอักษร";
?>
</body>
</html>