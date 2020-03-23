<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 
<br><br><br>
<?php
$array = array(array('Имя', 'Фамилия', 'Группа'), array('Скакун', 'Валентина', 'П-24'));

function printArray($arg){
    echo "<h4>Пример вывода массива в таблицу</h4>";
    echo "<table border='1'>";
    foreach($arg as $value){
        echo "<tr>";
        foreach($value as $item){
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
    
function printForm(){
    echo <<< HEREDOC
    <h4>Переданные формой данные</h4>
        <table border="1" >
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>

        </tr>
        <tr>
            <td>$_POST[user_name]</td>
            <td>$_POST[user_surname]</td>
            <td>$$_POST[age]</td>

        </tr>
    </table>
    <br><br><br>
    <table border="2" width = "30%">
        <tr>

            <th>QUERY_STRING</th>
            <th>HTTP_USER_AGENT</th>
            <th>REMOTE_ADDR</th>
        </tr>
        <tr>

            <td>$_SERVER[QUERY_STRING]</td>
            <td>$_SERVER[HTTP_USER_AGENT]</td>
            <td>$_SERVER[REMOTE_ADDR]</td>
        </tr>
    </table>   

HEREDOC;
}  
    
printArray($array);

if (isset($_POST['user_name']) || isset($_POST['user_surname']) || isset($_POST['age'])) {
    printForm();
}
?>
<br> <a href="index.html">Вернуться на предыдущую страницу</a>
</body>
</html>