<?php

// Notion des classes
// l'objet est l'animal

/*
* caracteristiques: couleures poids
* comportement ou fonctionalite: manger, boire, decrire

*/

interface  domestique
{
    public function chasserAvecHomme();
    public function faireCalin();
}

abstract class Animal
{
    protected $couleur;
    protected $poids;
    public function __construct($couleur, $poids)
    {
        $this->couleur = $couleur;
        $this->setPoids($poids);
    }

    public function setPoids(int $poids)
    {
        if ($poids >  0  && $poids <= 200) {
            $this->poids = $poids;
        } else {
            throw new Exception("Le poids doit etre compris entre 1 et 200");
        }
    }

    public function getPoids()
    {
        return $this->poids;
    }

    abstract  protected function manger();

    abstract protected function crier();

    public function boire()
    {
        print('je bois de l\'eau ');
    }

    public function decrire()
    {
        print("je suis un animal de couleure $this->couleur et je pese $this->poids kg puis" . $this->manger());
        echo '<br>';
    }
};



// Class Lion
class Lion extends Animal
{
    private $taille;
    public function __construct($couleur, $poids, $taille)
    {
        parent::__construct($couleur, $poids);
        $this->taille = $taille;
    }
    public function manger()
    {
        print("je mange de la viande");
    }

    public function crier()
    {
        print("je rugit en pleine savane");
    }

    public function decrire()
    {
        print("je suis un lion de taille $this->taille cm, de couleure $this->couleur et je pese $this->poids kg puis" . $this->manger());
        echo '<br>';
    }
}

// Class Chien
class Chien extends Animal implements domestique
{
    private $taille;
    public function __construct($couleur, $poids, $taille)
    {
        parent::__construct($couleur, $poids);
        $this->taille = $taille;
    }
    public function manger()
    {
        print("je mange du poisson");
    }

    public function crier()
    {
        print(" et j'aboie continuellement");
    }

    public function faireCalin()
    {
        print("je fais un calin <br>");
    }

    public function chasserAvecHomme()
    {
        print(" je chasse tres bien");
    }

    public function decrire()
    {
        print("je suis un Chien de taille $this->taille cm, de couleure $this->couleur et je pese $this->poids kg puis" . $this->manger());
        echo '<br>';
    }
}

// Tigre
class Tigre extends Animal
{
    private $taille;
    public function __construct($couleur, $poids, $taille)
    {
        parent::__construct($couleur, $poids);
        $this->taille = $taille;
    }

    public function manger()
    {
        print("je mange du gibier");
    }


    public function crier()
    {

        print(" et je grogne dans une brousse");
    }

    public function decrire()
    {
        print("je suis un Tigre de taille $this->taille cm, de couleure $this->couleur et je pese $this->poids kg puis" . $this->manger());
        echo '<br>';
    }
}

$chien = new Chien("Grise", 20, 45);

$chien->faireCalin();
$chien->crier();
$chien->chasserAvecHomme();

class eleves implements domestique
{
}
