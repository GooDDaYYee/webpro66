<html>
<head>
<title>การใช้ associative_array</title>
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
    print_r($student);

    echo $student['id'];
    echo $student['surname'];
    echo $student['lastname'];
    echo $student['cur'];
    echo $student['add'];
 ?>
</body>
</html>