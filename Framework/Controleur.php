<?php

namespace App\Framework;

use App\Framework\Requete;
use App\Framework\Vue;
/**
 * Classe abstraite Controleur
 * Fournit des services communs aux classes Controleur dérivées
 */


abstract class Controleur {

    /**
     * Action à réaliser
     * @var
     */
    private $action;


    /**
     * Requête entrante
     * @var Requete
     */
    protected $requete;


    /**
     * Définit la requête entrante
     *
     * @param Requete $requete Requete entrante
     */
    public function setRequete(Requete $requete)
    {
        $this->requete = $requete;
    }


    /**
     * Exécute l'action à réaliser.
     * Appelle la méthode portant le même nom que l'action sur l'objet Controleur courant
     *
     * @throws Exception Si l'action n'existe pas dans la classe Controleur courante
     */
    public function executerAction($action)
    {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        }
        else {
            $classeControleur = get_class($this);
            throw new \Exception("Action '$action' non définie dans la classe $classeControleur");
        }
    }


    /**
     * Méthode abstraite correspondant à l'action par défaut
     * Oblige les classes dérivées à implémenter cette action par défaut
     */
    public abstract function index();



    /**
     * Génère la vue associée au controleur courant
     * @param array $donneesVue
     * @param null $action
     */
    protected function genererVue($donneesVue = array(), $action = null)
    {
        // Utilisation de l'action actuelle par défaut
        $actionVue = $this->action;
        if ($action !== null) {
            // Utilisation de l'action actuelle par défaut
            $actionVue = $action;
        }
        // Détermination du nom du fichier vue à partir du nom du contrôleur actuel
        $classeControleur = get_class($this);
        $controleur = str_replace("App\Controleur\Controleur", "", $classeControleur);

        // Instanciation et génération de la vueF
        $vue = new Vue($actionVue, $controleur);
        $vue->generer($donneesVue);
    }


    /**
     * @param $controleur
     * @param null $action
     */
    protected function rediriger($controleur, $action = null)
    {
        $racineWeb = Configuration::get("racineWeb", "/");
        // Redirection vers l'URL /racine_site/controleur/action
        header("Location:" . $racineWeb . $controleur . "/" . $action);
    }


    /**
     * @throws \Exception
     */
    protected  function checkCSRF() {
        if ($this->requete->getSession()->getAttribut("token") !== $this->requete->getParametre("token")) {
            throw new \Exception("Erreur CSRF");
        }

    }
}
