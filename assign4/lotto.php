<html>
<head>
<title>โปรแกรมออกเลขม้าย 2 ตัว</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
 <?php
 $number=range(0,99); //เก็บตัสเลขตั้งแต่ 1 ถึง 100
 shuffle($number);
 echo "<h2>เลขม้าย 2 ตัว ประจำวันงวดวันที่ 1 สิงหาคม 2566</h2>";
 $number2=$number[0];
 if($number[0]<10){
    $lotto="0"."$number2";
 }
 else{
    $lotto=$number2;
 }
 echo "<span style='font-size:60px;'>$lotto</span>";
 ?>
</body>
</html>