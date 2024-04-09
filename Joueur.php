<?php

class Joueur implements JoueurInterface{

   private string $nom;
   private string $prenom;
   private string $classement;

   public function __construct($nom,$prenom,$classement){
       $this -> nom = $nom;
       $this -> prenom = $prenom;
       $this -> classement = $classement;
   }

   public function getNom()
   {
       return $this -> nom;
   }

   public function getPrenom()
   {
       return $this -> prenom;
   }

   public function getClassement()
   {
       return $this-> classement;
   }


   public function setNom(){
       return $this -> nom;
   }

   public function setPrenom(){
       return $this -> prenom;
   }

   public function setClassement(){
       return $this ->classement;
   }

}
