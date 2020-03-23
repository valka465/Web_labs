
<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 


<?php

require_once "Mail.php";

class Send extends Mail
{
    private $name;
    private $surname;
    private $City;
    private $Street;
    private $Number;

    public function __construct($From, $To)
    {
        parent::__construct($From, $To);
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    public function getCity()
    {
        return $this->City;
    }

    public function setCity($City)
    {
        $this->City = $City;
    }

    public function getStreet()
    {
        return $this->Street;
    }

    public function setStreet($Street)
    {
        $this->Street = $Street;
    }

    public function getNumber()
    {
        return $this->Number;
    }

    public function setNumber($Number)
    {
        $this->Number = $Number;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function printObj()
    {
        echo "<br><br>";
        echo "Имя: " . $this->getName() . "<br>";
        echo "Фамилия: " . $this->getSurname() . "<br>";
        echo "Город: " . $this->getCity() . "<br>";
        echo "Улица: " . $this->getStreet() . "<br>";
        echo "Дом: " . $this->getNumber() . "<br>";
        parent::showFrom();
        parent::showTo();
    }

}?>
</body>
</html>