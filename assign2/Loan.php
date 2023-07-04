<html>
    <head>
        <title>โปรแกรมคำนวนเงินกู้</title>
        <meta charset="UTF-8">
</head>
<body>
    <h2>โปรแกรมคำนวนเงินกู้</h2>
    <form method="post">
        <div>เงินกู้ : <input type="number" name="cash" required></div>
        <div>จำนวนปีที่กู้เงิน : 
            <input type="radio" name="year" value="5" checked>5
            <input type="radio" name="year" value="15">15
            <input type="radio" name="year" value="20">20
        </div>
        <div><input type="submit" name="cel" value="คำนวณ"></div>
    </form>
    <hr>
<?php
    if(isset($_POST['cel'])){
        $cash=$_POST['cash'];
        $year=$_POST['year'];

        if($year=="20"){
            $rate=12;
        }elseif($year=="15"){
            $rate=10;
        }else{
            $rate=8;
        }
        echo "อัตราดอกเบี้ย $rate %<br>";
        $interest = $cash*$rate/100; echo"ดอกเบี้ยที่ต้องเสีย  $interest (บาท)<br>";
        $total = $cash+$interest; echo"จำนวนเงินทั้งหมดที่ต้องจ่าย  $total (บาท)<br>";
        $monthly = $total/($year*12); echo"รายเดือนที่ต้องจ่ายในแต่ละเดือน  $monthly (บาท)<br>";
    }
?>
</body>
</html>