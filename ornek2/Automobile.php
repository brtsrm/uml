<?php

class AutoMobile
{
    private $driver;

    public function __construct()
    {
        $this->driver = null;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
}

class Person
{
    private $AutoMobile;

    public function __construct()
    {
        $this->AutoMobile = null;
    }

    public function setCar($person)
    {
        $this->AutoMobile = $person;
    }

    public function getCar()
    {
        return $this->AutoMobile;
    }
}

$person = new Person();
$autoMobile = new AutoMobile();
$person->setCar($autoMobile);
$autoMobile->setDriver($person);


// Ekran çıktısı
echo "Person nesnesinin arabası: " . get_class($person->getCar()) . PHP_EOL;
echo "AutoMobile nesnesinin sürücüsü: " . get_class($autoMobile->getDriver()) . PHP_EOL;