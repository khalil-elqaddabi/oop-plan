<?php


// Héritage Animalier
class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function faireDuBruit()
    {
        echo "make sound " . "\n";
    }

    public function sePresenter()
    {
        echo "i am an animal and my name is : " . $this->name .  "\n";
    }
}

class Chien extends Animal
{
    public function faireDuBruit()
    {
        echo "hoow hooow" . "\n";
    }
}

class Chat extends Animal
{
    public function faireDuBruit()
    {
        echo "meow meow" . "\n";
    }
}

$animaux = [
    new Chien("dogy"),
    new Chat("mimi")
];

foreach ($animaux as $animal) {
    $animal->sePresenter();
    $animal->faireDuBruit();
}



