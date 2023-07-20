<html><html>
<head>
<title>โปรแกรมสร้างตาราง</title>
<style type="text/css">
    from{
        margin: 20px;
    }
</style>
<meta charset="utf-8">
</head>
<body>
<h1>โปรแกรมสร้างตาราง</h1>
<form method="post">
    <div>จำนวนแถว : <input type="number" name="row"></div>
    <div>จำนวนคอลัมน์ :<input type="number" name="col"></div>
    <div>สี : <input type="color" name="color"></div>
    <div><input type="submit" name="sub" value="สร้างตาราง"></div>
    <hr>
</form>
<table border=1>
<?php
if(isset($_POST['sub'])){
    $row1= $_POST['row'];
    $col1 = $_POST['col'];
    $color1 =$_POST['color'];

    echo "<table border = '1' style = 'background-color:$color1'>";

    for ($row=1; $row<=$row1 ; $row++){ 
    echo"<tr>";
        for ($col=1; $col <=$col1 ; $col++) { 
        
    echo "<td>แถวที่ $row คอลัมน์ที่ $col </td>";
   }  
    echo "</tr>";   
    }

}
?>
</table>


</body>
</html>
<head>
<title>การใช้ loop แสดงข้อความตามจำนวนรอบที่กำหนด</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
<table border=1>
    <?php
    for ($row=1; $row<=10 ; $row++){ 
    echo"<tr>";
        for ($col=1; $col <=3 ; $col++) { 
        
    echo "<td>แถวที่ $row คอลัมน์ที่ $col </td>";
   }  
   echo "</tr>";   
 }
?>
    
</table>
</body>
</html>