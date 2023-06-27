<html>
    <head>
        <title>ตรวจสอบค่าตัวแปร</title>
</head>
<body>
<?php
    $number=456;
    $text="PHP Code";

    empty($number);
    //ตรวจสอบว่าฟังก์ชั่นนี้ว่างหรือไม่ return ค่า ture ค่าว่าง หรือ false ค่าไม่ว่าง
    if(empty($number)){
        echo "ตัวแปรนี้ว่าง";
    }
    else {
        echo"ตัวแปรนี้ไม่ว่าง";
    }
    
    unset($text);//ยกเลิกค่าตัวแปร

    //ตรวจสอบว่าฟังก์ชั่นนี้กำหนดค่าแล้วหรือไม่ return ค่า ture แสดงว่ากำหนดแล้ว หรือ false แสดงว่าไม่ได้กำหนด
    echo"<hr>";
    if(isset($text)){
        echo "ตัวแปรนี้กำหนดค่าแล้ว";
    }
    else{ 
        echo"ตัวแปรนี้ไม่ได้กำหนดค่า";
    }
    echo"<hr>";

?>
</body>
</html>