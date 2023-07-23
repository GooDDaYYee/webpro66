<html>
<head>
<title>การใช้ for each</title>
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
    
    foreach($student as $key=>$value){
        echo $key,"=>";
        echo $value;
        echo "<hr>";
    }
 ?>
</body>
</html>