<?php
    //ฟังก์ชั่นเพื่อคำนวณหาพื้นที่ สามเหลียม
    // สูตร 0.5*ฐาน*สูง

    function area3angle($base=1,$hieght=2){
        $area3=0.5*$base*$hieght;
        return $area3;
    }

    //จงเขียนฟังก์ชั่นชื่อ showtext()
    // -แสดงข้อความตามที่กำหนดได้
    // -กำหนดจำนวนครั้งของข้อความในการแสดงผลได้:1ครั้ง
    // -กำหนดสีของข้อนความได้:ดำ
    // -กำหนดขนาดของข้อความได้:16pt
    // -ให้แสดงผลข้อความแบบไม่ต้องรีเทิร์นค่า
    // -ให้กำหนดค่า default parameter

    // function showtext($text,$num,$col,$size){
    //     for($i=1;$i<=$num;$i++){
    //         echo "<font color='$col' size='$size'","pt>$text</font><br>";
    //     }
    
    function showtext($text,$num,$col,$size){
        for($i=1;$i<=$num;$i++){
            echo "<div style='color:$col; font-size:$size","pt;'>$text</div>";
        }
    }

    //****************************************** */
    // เขียนฟังก์ชั่นเพื่อนสร้างตารางตามโจทย์ดังต่อไปนี้
    // ชื่อฟังก์ชั่น gen_table
    //กำหนดจำนวนแถวของตารางได้ :1 แถว
    //กำหนดจำนวนคอลัมของตารางได้ :1 คอลัม
    //กำหนดความกว้างของตารางได้ : 10 px
    //กำหนดสีพื้นหลังของตารางได้ : สีขาว
    //กำหนดสีตัวหนังสือ : สีดำ

    function gen_table($row,$col,$color,$colorfont,$width){
        echo "<table border = '1' style = 'background-color:$color'>";

        for ($i=1; $i<=$row ; $i++){ 
        echo"<tr>";
            for ($r=1; $r <=$col ; $r++) { 
            
        echo "<td slyte='color=$colorfont;width:$width","%;'>แถวที่ $row คอลัมน์ที่ $col </td>";
       }  
        echo "</tr>";   
        }
        }
    // -อัตราดอกเบี้ย
    // -ดอกเบี้ยคิดเป็นจำนวนเงินกี่บาท
    // -รวมยอดทั้งหมดที่ต้องชำระ
    // -รายเดือน
    // -return ค่า
    function Lone($cash,$year){
            if($year=="20"){
                $rate=12;
            }elseif($year=="15"){
                $rate=10;
            }else{
                $rate=8;
            }
        $data[0] = $cash*$rate/100;
        $data[1] = $cash+$data[0];
        $data[2] = $data[1]/($year*12);
        return $data;
    }
?>
