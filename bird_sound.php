<?php
interface Bird
{
    public function makeSound();
}

class perkutut implements Bird
{
    public function makeSound()
    {
        echo "Kur Kur";
    }
}

$Burung = new perkutut();
$burung->makeSound();
