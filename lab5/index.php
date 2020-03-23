<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 
<br><br><br>

<?php

require_once "Send.php";

echo <<< HEREDOC
<h3>Создать письмо</h3>
<form action="index.php" method="get">
    <input name="name" type="text" required="required"> Имя<br> 
    <input name="surname" type="text" required="required"> Фамилия<br> 
    <input name="City" type="text" required="required"> Город<br> 
    <input name="Street" type="text" required="required"> Улица<br> 
    <input name="Number" type="number" required="required"> Дом<br> 
    <input name="From" type="text" required="required"> От<br>
    <input name="To" type="text" required="required"> Кому<br><br> 
    <button type="submit">Создать объект письма</button>
</form>
HEREDOC;


if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['City']) && isset($_GET['Street']) &&
    isset($_GET['Number']) && isset($_GET['From']) && isset($_GET['To'])){
    $Send = new Send($_GET['From'], $_GET['To']);
    $Send->setName($_GET['name']);
    $Send->setSurname($_GET['surname']);
    $Send->setCity($_GET['City']);
    $Send->setStreet($_GET['Street']);
    $Send->setNumber($_GET['Number']);

    $Send->printObj();
}?>
</body>
</html>