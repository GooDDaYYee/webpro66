<html>
<head>
<title>การแสดงข้อมูล วันที่ ตัวฟังก์ชั่น date</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
<?php
    echo date("d-m-y เวลา H:i:s");
    $thaidate=array("sun"=>"อาทิตย์","Mon"=>"จันทร์","Tue"=>"อังคาร","Wed"=>"พุธ","Thu"=>"พฤหัสสบดี",
    "Fri"=>"ศุกร์","Sat"=>"เสาร์");


    $month=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม"
    ,"กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

    $thaiyear=date("Y")+543;
    $monthnum=date("n")-1;//หมายเลขเดือน
    $thaimonth=$month[$monthnum];//เดือนภาษาไทย
    $engdate=date("D"); //ชื่อย่อของวัน 3 ตัวอักษร
    $daynum=date("j"); //วันที่
    echo "<hr>";
    echo "วัน $thaidate[$engdate] ที่ $daynum $thaimonth พ.ศ. $thaiyear";
    echo "เวลา",date("H:i:s");
?>
</body>
</html>