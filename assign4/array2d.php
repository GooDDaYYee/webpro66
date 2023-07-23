<html>
<head>
<title>การเขียน Array 2 มิติ</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
 <?php
    $student=
    array(array("64541207098-1","อัครพล","กันธิยะ","BIS","เชียงใหม่"),
    array("64541207008-0"," Jakrapan  ","Phongda","BIS","เชียงใหม่"),
    array("64541207104-7","สัจจกร","ศิวธนภูวดล","BIS","เชียงใหม่"),
    array("64541207099-9","จิตติพัฒน์","สุนันตา","BIS","เชียงใหม่"),
    array("645412070874","ชิษณุพงศ","ลาภใหญ่","BIS","เชียงใหม่"));

    echo print_r($student);
    echo $student[0][0];

    echo "<hr>";
    for($row=0;$row<5;$row++){
        for($col=0;$col<5;$col++){
            echo $student[$row][$col];
            echo "<br>";
        }
        echo "<hr>";
    }
 ?>
</body>
</html>