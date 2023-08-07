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
    <h1>ฟอร์มโพสต์ข้อความ</h1>
    <form method="post">
        <textarea name="text1" cols="100" rows="10"></textarea>
        <input type="submit">
    </form>
<?php
    if(isset($_POST['text1'])){
        $text1=$_POST['text1'];
        echo nL2br($text1);//แปลง \n ให้เป็น <br>
    }
?>
</body>
</html>