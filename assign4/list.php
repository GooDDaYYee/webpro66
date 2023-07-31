<html>
<head>
<title>การใช้ list</title>
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
    
    while(list($key,$value)=($student)){
        echo $key,"=>";
        echo $value;
        echo "<hr>";
    }
 ?>
</body>
</html>