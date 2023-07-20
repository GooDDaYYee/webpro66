<html>
<head>
<title>การใช้ each</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
 <?php
    $student=array("id"=>"64541207098-1","surname"=>"อัครพล","lastname"=>"กันธิยะ","cur"=>"BIS","add"=>"เชียงใหม่");
    
    while($data=each($student)){
        echo "Key=".$data[0];
        echo "Value=".$data[1];
        echo "<hr>";
    }
 ?>
</body>
</html>