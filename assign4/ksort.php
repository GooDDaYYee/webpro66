<html>
<head>
<title>การเรียงข้อมูลในอเรย์ที่มี index เป็นตัวอักษรโดยเรียงตาม key</title>
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
    
    ksort($student); //เรียงตาม key จากน้อยไปหามาก

    foreach($student as $key=>$value){
        echo $key,"=>";
        echo $value;
        echo "<hr>";
    }
 ?>
</body>
</html>