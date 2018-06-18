
<?php
class personnage{
  
    public $vie = 100;
    public $age = 34;

    private $nom;

    public function __construct($nom){

        $this->nom =$nom;

    }
    public function GetNom(){
            return $this->nom;

    }


    public function msg(){

        echo "Nous somme La";

    }



    }







?>

