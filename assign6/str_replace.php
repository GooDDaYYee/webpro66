<html>
<head>
<title>การค้นห้าและแทนที่คำ ที่อยู่ในสติง</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
    <h1>ฟอร์มโพสต์ข้อความ</h1>
    <form method="post">
        <textarea name="text1" cols="100" rows="10"></textarea>
        <input type="submit">
    </form>
<?php
    if(isset($_POST['text1'])){
        $text1=$_POST['text1'];
        $text1=str_replace("กู","กระผม",$text1);
        $text1=str_replace("มึง","<img src='cool.png'>",$text1);
        echo nL2br($text1);//แปลง \n ให้เป็น <br>
    }
?>
</body>
</html>