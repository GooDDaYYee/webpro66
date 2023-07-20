<html>
    <meta charset="utf-8">
<head>
    <title>
       การใช้ loop สร้างตาราง
    </title>
    <style >
        div{
            margin: 20px;
        }

</style>
<meta chaset="utf-8">
</head>
<body>
       <h2>โปรแกรมสร้างตาราง</h2>
    <table border = 1>
    <form method="post" 
        enctype="multipart/form-data">
        <div>   จำนวนแถว      : <input type=" number" name="row" required></div>
        <div>   จำนวนคอลัม     : <input type=" number" name="col" required></div>
        <div>   สีพื้นหลัง         : <input type="color" name="color" required></div>
        <div><input type="submit" name="sub" value="สร้างตาราง"></div>
    </form>

   
<?php
if(isset($_POST['sub'])){
    
             $row1 = $_POST['row'];
             $col1 = $_POST['col'];
             $color1 = $_POST['color'];
           echo "<table border= 1 style='background-color:$color1'>";
    $row=1 ;       
   while($row<=$row1){

    echo "<tr>";

             $col=1 ;
        while($col<=$col1){
            echo "<td> แถวที่ $row คอลลัมน์ที่ $col</td>";
            $col++;
        }

    echo "</tr>";
    $row++;
 }
}
  
    
 

?>
</table>

<hr>
    </body>
</html>
