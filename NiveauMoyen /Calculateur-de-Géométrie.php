<?php


abstract class Forme
{
    abstract public function calculerAire(): float;
}

class Rectangle extends Forme
{
    private float $largeur;
    private float $hauteur;

    public function __construct(float $largeur, float $hauteur)
    {
        $this->setLargeur($largeur);
        $this->setHauteur($hauteur);
    }

    public function getLargeur(): float
    {
        return $this->largeur;
    }

    public function getHauteur(): float
    {
        return $this->hauteur;
    }

    public function setLargeur(float $largeur): void
    {
        if ($largeur <= 0) {
            throw new InvalidArgumentException("Largeur invalide");
        }

        $this->largeur = $largeur;
    }

    public function setHauteur(float $hauteur): void
    {
        if ($hauteur <= 0) {
            throw new InvalidArgumentException("Hauteur invalide");
        }

        $this->hauteur = $hauteur;
    }

    public function calculerAire(): float
    {
        return $this->largeur * $this->hauteur;
    }
}

$rectangle1 = new Rectangle(10, 5);

echo "Largeur: " . $rectangle1->getLargeur() . "\n  ";
echo "Hauteur: " . $rectangle1->getHauteur() . "\n  ";
echo "Aire: " . $rectangle1->calculerAire() . "\n   ";
