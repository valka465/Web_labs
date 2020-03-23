<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 
  <br><br><br> <div align="center"><font size="+2">Тестовая страница из первой работы</font></div>
<br><br><br>
<?php
$string = file_get_contents('index.html');
$count = preg_match_all("/<p>.+<\/p>/", $string, $match);
echo "Количество тегов <b>&lt;p&gt;...&lt;/p&gt;</b> в документе: " . $count . "<br>";
echo "<br>Найдены строки: <br>";
for ($i=0; $i < $count; $i++) { 
    echo strip_tags($match[0][$i]) . "<br>";
}
?>
<a href="index.html">Нажмите, чтобы вернуться на предыдущую страницу</a>
</body>
</html>