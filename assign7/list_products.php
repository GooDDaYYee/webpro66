<html>
<head>
<title>แสดงรายการสินค้าทั้งหมด</title>
<meta charset="utf-8">
</head>
<body>
<?php
    require("../require/connect_sql.php");
    $con=connect_db("client");
    $result=mysqli_query($con,"SELECT product_id,product_title FROM products") or die(mysqli_error($con));

    // $data=mysqli_fetch_row($result);//ฟังก์ชั่นนี้จะรีเทินค่ากลับออกมาในรูปแบบ array ขึ้นอยู่กับเราเลือกมากี่ช่อง
    // print_r($data);

    while($data=mysqli_fetch_row($result)){
        print_r($data);
        echo "<hr>";
    }
?>
</body>
</html>