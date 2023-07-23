<html>
<head>
<title>การใช้ Sort</title>
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
 
 sort($province);
 for($i=0;$i<=4;$i++){
	echo $province[$i],"<br>";
 }
 ?>
</body>
</html>