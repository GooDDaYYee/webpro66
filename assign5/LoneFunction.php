<html>
<head>
<title>คำนวณหาพื้นที่สามเหลียม</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
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
            require("function.php");
            $cash=$_POST['cash'];
            $year=$_POST['year'];
            list($interest,$total,$monthly)=Lone($cash,$year);
            echo"ดอกเบี้ยที่ต้องเสีย  ".number_format( $interest, 2 )," (บาท)<br>";
            echo"จำนวนเงินทั้งหมดที่ต้องจ่าย  ".number_format( $total, 2 )," (บาท)<br>";
            echo"รายเดือนที่ต้องจ่ายในแต่ละเดือน  ".number_format( $monthly, 2 )," (บาท)<br>";
        }
 ?>
</body>
</html>