<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 
<br><br><br><?php

if (!empty($_POST["user_name"])&&!empty($_POST["user_surname"])&&!empty($_POST["age"]))
 {
 echo "Получены новые вводные:<br>";
 echo "имя - ";
 echo $_POST["user_name"];
 echo "<br>фамилия - ";
 echo $_POST["user_surname"];
 echo "<br>возраст - ";
 echo $_POST["age"];
 echo " лет";
 }
 else
 {
 echo "Переменные не дошли. Проверьте все еще раз.";
 }


?>
<br><br><br><a href="index2.php">Вернуться на предыдущую страницу</a> <br>
</body>
</html>