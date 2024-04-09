<?php

class Matchs
{
   private  $joueur1;
   private  $joueur2;
   private int $score;
   private datetime $date;

   public function __construct(JoueurInterface $joueur1, JoueurInterface $joueur2, $score, $date){
   $this -> joueur1 = $joueur1;
   $this -> joueur2 = $joueur2;
   $this -> score = $score;
   $this -> date = $date;
   }

   public function getVainqueur()
   {
       $scores = explode("-", $this -> score);
       if ($scores[0] > $scores[1]) {
           return $this -> joueur1;
       }elseif ($scores[1] > $scores[0]){
           return $this->joueur2;
       } else {
         return print "Match null";
       }
   }

}