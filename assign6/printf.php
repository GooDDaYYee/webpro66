<html>
<head>
<title>การแสดงผลโดยใช้ฟังก์ชั่น printf ในการกำหนดรูปแบบ</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
<?php
    $data=110.56888;
    printf("เลขฐานสอง = %b",$data); echo "<br>";
    printf("รหัสแอสกี้ = %c",$data); echo "<br>";
    printf("เลขฐานสิบ = %d",$data); echo "<br>";
    printf("ทศนิยม = %f",$data); echo "<br>";
    printf("ทศนิยมสองตำแหน่ง = %.2f",$data); echo "<br>";
    printf("เลขฐานแปด = %o",$data); echo "<br>";
    printf("สตริง = %s",$data); echo "<br>";
    printf("เลขฐานสิบหกตัวพิมพ์เล็ก = %x",$data); echo "<br>";
    printf("เลขฐานสิบหกตัวพิมพ์ใหญ่ = %X",$data); echo "<br>";
?>
</body>
</html>