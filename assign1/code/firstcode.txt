<html>
<head>
    <title></title>
</head>
<body>
<?php
    echo "Hello PHP";
    echo "<br>";
    echo 2023;
    echo "<br>";
    echo "2566";
    echo "<hr>";
    echo "2023+2566";
    echo "<br>";
    echo 2023+2566;//หาผลบวก
    echo "<br>";
    echo "<hr>";
    echo "hello", 2023+2566,"<br>";//echo "hello", 2023+2566,"<br>; ใส่แบบนี้ก็ได้
    echo "hello 2023+2566";

    print "<hr>";
    print "hello";

    echo "<hr>";

    $number=152; //ตัวแปร
    $float=5.6;
    $text="Web Programming";

    echo $number,"<br>";//แสดงตัวแปร
    echo $float,"<br>";
    echo $text,"<br>";

    define("bis","Business Information System");//ตัวแปรคงที่
    define("star","***************************");
    define("smile","<img src='smile.png'>");
    define("url", "https://www.facebook.com/finn.land.982");
    echo bis;
    echo star;
    echo smile;
    echo "<hr>";
    echo "<a href='",url,"'>เพื่อนผมโสด 'คลิก'</a>";//อันไหนจะให้ประมวลผลต้องอยู่นอก ""
?>
</html>