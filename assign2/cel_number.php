<html>
    <head>
        <title>โปรแกรมคำนวณเลข แบบ IF</title>
        <meta charset="UTF-8">
</head>
<body>
    <h2>โปรแกรมคำนวณเลข</h2>
    <form method="post">
        <div>ตัวเลขที่1 : <input type="number" name="num1" required></div>
        <div>เครื่องหมาย : 
            <input type="radio" name="op" value="บวก" checked>+
            <input type="radio" name="op" value="ลบ">-
            <input type="radio" name="op" value="คูณ">x
            <input type="radio" name="op" value="หาร">/
            <input type="radio" name="op" value="Mod">%
        </div>
        <div>ตัวเลขที่2 : <input type="number" name="num2" required></div>
        <div><input type="submit" name="cel" value="คำนวณ"></div>
    </form>
    <hr>
<?php
    if(isset($_POST['cel'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['op'];

        if($op=="บวก"){ //ตัวแปร op มีค่า บวกหรือไม่
            $result=$num1+$num2;
        }elseif($op=="ลบ"){ //ตัวแปร op มีค่า ลบหรือไม่
            $result=$num1-$num2;
        }elseif($op=="คูณ"){ //ตัวแปร op มีค่า คูณหรือไม่
            $result=$num1*$num2;
        }elseif($op=="หาร"){ //ตัวแปร op มีค่า หารหรือไม่
            $result=$num1/$num2;
        }else{ //ตัวแปร op มีค่า Mod
            $result=$num1%$num2;
        }
        echo "ผลลัพธ์ของ $num1 $op $num2 = $result";
    }
?>
</body>
</html>