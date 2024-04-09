<?php

class Tournoi
{

    private $joueurs = [];
    private $matchs = [];

    public function ajouterJoueur(JoueurInterface $joueur)
    {
        $this->joueurs[] = $joueur;
    }

    public function modifierJoueur($index, JoueurInterface $joueur)
    {
        if (isset($this->joueur[$index])) {
            $this->joueurs[$index] = $joueur;
        } else {
            print "Joueur pas trouvé";
        }
    }

    public function supprimerJoueur($index)
    {
        if (isset($this->joueurs[$index])) {
            unset($this->joueurs[$index]);
            $this->joueurs = array_values($this->joueurs);
        } else {
            print "Joueur pas trouvé";
        }
    }

    public function listerJoueur()
    {
        foreach ($this->joueurs as $index => $joueur) {
            echo "Joueur ", ($index + 1), " : ", $joueur->getNom(), " ", $joueur->getPrenom(), " (Classement : ", $joueur->getClassement(), ")";
        }
    }



    public function creerMatch(JoueurInterface $joueur1, JoueurInterface $joueur2, $score, DateTime $date)
    {
        $match = new Matchs($joueur1, $joueur2, $score, $date);
        $this->matchs[] = $match;
    }

    public function Exceptionerror()
    {



    }



}