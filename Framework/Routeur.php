<?php

namespace App\Framework;

use App\Framework\Requete;
use App\Framework\Vue;


/*
 * Classe de routage des requêtes entrantes.

*/

class Routeur {


    /**
     * Méthode principale appelée par le contrôleur frontal
     * Examine la requête et exécute l'action appropriée
     */
    public function routerRequete() {
        try {
            // Fusion des paramètres GET et POST de la requête
            // Permet de gérer uniformément ces deux types de requête HTTP
            $requete = new Requete(array_merge($_GET, $_POST));

            $controleur = $this->creerControleur($requete);
            $action = $this->creerAction($requete);

            $controleur->executerAction($action);
        }
        catch (\Exception $e) {
            $this->gererErreur($e);
        }
    }


    /**
     * Instancie le contrôleur approprié en fonction de la requête reçue
     *
     * @param Requete $requete Requête reçue
     * @return Instance d'un contrôleur
     * @throws \Exception
     */
    private function creerControleur(Requete $requete) {
        // Grâce à la redirection, toutes les URL entrantes sont du type :
        // read.php?controleur=XXX&action=YYY&id=ZZZ
        $controleur = "Accueil";  // Contrôleur par défaut
        if ($requete->existeParametre('controleur')) {
            $controleur = $requete->getParametre('controleur');
            // Première lettre en majuscules
            $controleur = ucfirst(strtolower($controleur));
        }
        // Création du nom du fichier du contrôleur
        // La convention de nommage des fichiers controleurs est : Controleur/Controleur<$controleur>.php
        $classeControleur = "App\Controleur\Controleur" . $controleur;




        try {
            // Instanciation du contrôleur adapté à la requête

            $controleur = new $classeControleur();
            $controleur->setRequete($requete);
            return $controleur;
        }
        catch (\Exception $e) {
            throw new \Exception("Controleur '$controleur' introuvable");
        }
    }


    /**
     * Détermine l'action à exécuter en fonction de la requête reçue
     *
     * @param Requete $requete Requête reçue
     * @return string Action à exécuter
     */
    private function creerAction(Requete $requete) {
        $action = "index";  // Action par défaut
        if ($requete->existeParametre('action')) {
            $action = $requete->getParametre('action');
        }
        return $action;
    }


    /**
     * Gère une erreur d'exécution (exception)
     *
     * @param \Exception $exception Exception qui s'est produite
     */
    private function gererErreur(\Exception $exception) {
        $vue = new Vue('erreur');
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }
}
