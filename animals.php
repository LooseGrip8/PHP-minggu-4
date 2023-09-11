<?php
//interface definition

interface Animal
{
    public function makeSound();
}

//class definition

class cat implements Animal
{
    public function makeSound()
    {
        echo "meow";
    }
}

class dog implements Animal
{
    public function makeSound()
    {
        echo "woof";
    }
}

class mouse implements Animal
{
    public function makeSound()
    {
        echo "squeak";
    }
}

//create list of animals
$cat = new cat();
$dog = new dog();
$mouse = new mouse();
$animals = array($cat, $dog, $mouse);

//make each animal make sound
foreach ($animals as $animal) {
    $animal->makeSound();
}
