<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 


<?php


class Mail
{
    private $From;
    private $To;

    public function __construct($From, $To)
    {
        $this->From = $From;
        $this->To = $To;
    }

    public function __destruct()
    {
    }

    public function showFrom()
    {
        echo "От: " . $this->From . "<br>";
    }

    public function showTo()
    {
        echo "Кому: " . $this->To . "<br>";
    }

    public function printObj(){}
}?>
</body>
</html>