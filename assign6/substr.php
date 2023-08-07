<html>
<head>
<title>การตัดข้อความตามความยาวที่กำหนดโดยใช้ substr</title>
<style type="text/css">
	div{
		margin: 20px;
	}
</style>
<meta charset="utf-8">
</head>
<body>
<?php
    echo "<h1>หัวข้อข่าวภาษาอังกฤษ</h1>";
    $eng_news="Reading a statement on national television on Sunday, the representative from Niger's 
    junta said they had information that a foreign power was preparing to attack Niger.
    After a crisis meeting in Nigeria, Ecowas military chiefs said on Friday they had drawn up a 
    detailed plan for the possible use of force.";
    echo $eng_news;
    echo "<br>";
    echo "<h2>ตัวอย่างข่าวหลังจากตัดข้อความ</h2>";
    $eng_news_sample=substr($eng_news,0,50);    
    echo $eng_news_sample."...More";

    echo "<h1>หัวข้อข่าวภาษาไทย</h1>";
    $thai_news="“วิโรจน์ ลักขณาอดิศร” เผย รู้อยู่แล้ว อีกฝ่ายพยายามยุแยงเพื่อไทย ฉีก MOU 8 พรรคร่วม ยอมรับมีความรู้สึก 
    แต่ก็ต้องลืม พยายามทำใจให้กว้าง อย่าคิดเล็กคิดน้อย แนะคนบางกลุ่ม ก็ไม่ควรไปหลงเชื่อ เพราะไม่ได้เป็นสัจจะบุรุษ
    วันที่ 7 ส.ค. 2566 นายวิโรจน์ ลักขณาอดิศร สส.บัญชีรายชื่อ พรรคก้าวไกล กล่าวถึงกรณีที่ทวีตผ่านบัญชีส่วนตัว 
    ท่าทีเหมือนเรียกให้พรรคเพื่อไทยหวนกลับมาจับมือกับพรรคก้าวไกลว่า อย่าเรียกว่า หวนกลับมาอยู่กับพรรคก้าวไกล 
    แต่เรียกว่า หวนกลับมาอยู่กับสัจวาจาที่ได้ให้ไว้กับประชาชน หวนกลับมาอยู่กับประชาชน 
    เพราะพรรคก้าวไกลยืนอยู่ข้างประชาชนไม่เคยผันแปร ซึ่งกับพรรคเพื่อไทยเราไม่เคยต้องกังวล เนื่องจากเคยทำงานร่วมกัน 
    และมีอุดมการณ์ที่ใกล้เคียงกัน ดังนั้นอยากจะชวนให้กลับมาเป็นความหวังของประชาชนเหมือนเดิม และที่ตัวเองนั้นพูดว่า 
    ฝ่ายอำนาจเก่าทุกยุคทุกสมัย มักจะใช้กลอุบายเดิมๆ";
    echo $thai_news;
    echo "<br>";
    echo "<h2>ตัวอย่างข่าวหลังจากตัดข้อความ</h2>";
    $thai_news_sample=iconv_substr($thai_news,0,50,"utf-8");    
    echo $thai_news_sample."...More";
?>
</body>
</html>