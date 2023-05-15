<?php

//Espace de nom correspondant à l'emplacement physique du fichier dans le projet (dans le dossier "src")

namespace Controllers;


/**
 * Classe contenant tous les contrôleurs de notre site
 */

class MainController{

    /**
     * Contrôleur de la page d'accueil
     */

    public function home(): void
    {
        //Chargera la vue "home.php" dans le dossier "views"
        require VIEWS_DIR . '/home.php';
    }

    /*
     * Contrôleur de la page 404
     */

    public function page404(): void
    {

        //Charge la vue "404.php" dans le dossier views
        require VIEWS_DIR . '/404.php';
    }




}