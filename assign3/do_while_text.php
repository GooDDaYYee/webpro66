<html>
<head>
<title>การใช้ Loop แสดงข้อความตามจำนวนรอบที่กำหนด </title>
<style type="text/css">
    div{
        margin: 20px;
    }
</style>
<meta charset="utf-8">
</head>
<body>
<?php 
    # จุดไหนที่อยากให้เปลี่ยน ให้กำหนดเป็นตัวแปร 
    # จุดไหนที่ไม่เปลี่ยน ให้กำหนดเป็นข้อความ
    $red=0;
    $green=255;
    $blue=0;
    $size = 12; #กำหนดฟอนต์เริ่มต้นที่ 12
    $r=1;

    do { 
        echo "<div style='font-size:$size","pt; color:rgb($red,$green,$blue)';>บรรทัดที่ $r Hello Web Programming<br>
        </div>";
        $size+=2; #เพิ่มค่ารอบละ 2
        $red+=26;
        $green-=23;
        $blue+=27;
        $r++;
    }while($r<=10);
    echo "<hr>";
?>
</body>
</html>