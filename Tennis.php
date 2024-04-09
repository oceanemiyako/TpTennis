<?php

require_once 'JoueurInterface.php';
require_once 'Joueur.php';
require_once 'Matchs.php';
require_once 'Tournoi.php';
function afficherMenu()
{
    echo "Menu :\n";
    echo "1. Ajouter un joueur\n";
    echo "2. Modifier un joueur\n";
    echo "3. Supprimer un joueur\n";
    echo "4. Lister les joueurs\n";
    echo "5. Créer un match\n";
    echo "6. Quitter\n";
    echo "Choisissez une option : ";

    $tournoi = new Tournoi();

    do {
        $choix = trim(fgets(STDIN));

        switch ($choix) {
            case 1:
                echo "Entrez le nom du joueur : ";
                $nom = trim(fgets(STDIN));
                echo "Entrez le prénom du joueur : ";
                $prenom = trim(fgets(STDIN));
                echo "Entrez le classement du joueur : ";
                $classement = trim(fgets(STDIN));

                $joueur = new Joueur($nom, $prenom, $classement);
                $tournoi->ajouterJoueur($joueur);
                echo "Joueur ajouté avec succès.\n";
                break;

            case 2:
                echo "Entrez l'index du joueur à modifier : ";
                $index = intval(trim(fgets(STDIN))) - 1;
                echo "Entrez le nouveau nom du joueur : ";
                $nom = trim(fgets(STDIN));
                echo "Entrez le nouveau prénom du joueur : ";
                $prenom = trim(fgets(STDIN));
                echo "Entrez le nouveau classement du joueur : ";
                $classement = trim(fgets(STDIN));

                $joueur = new Joueur($nom, $prenom, $classement);
                $tournoi->modifierJoueur($index, $joueur);
                break;

            case 3:
                echo "Entrez l'index du joueur à supprimer : ";
                $index = intval(trim(fgets(STDIN))) - 1;
                $tournoi->supprimerJoueur($index);
                break;

            case 4:
                echo "Liste des joueurs :\n";
                $tournoi->listerJoueur();
                break;

            case 5:


                break;
        }
    } while ($choix != 6);
}

afficherMenu();