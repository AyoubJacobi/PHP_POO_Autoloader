<?php
namespace app\Html;
 class Form{
     private $data;
     public $tage = 'p';
    
    //la fonction constucteur qui sert a entre les parametres 
    public function __construct($data=array()){
        $this -> data = $data;
    }
    //fonction qui entre un tage partéculier au html dans ce cas la ona utilisé Paragraphe $tage=p
    
    //recupérer la value de username pour la maitre in input value
    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }
  
  
 }
