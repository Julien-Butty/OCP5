<?php
namespace App\Framework;

use App\Framework\Session;

class Requete {

    // paramètres de la requête
    /**
     * @var
     */
    private $parametres;


    /**
     * @var \App\Framework\Session
     *
     */
    private $session;


    /**
     * Requete constructor.
     * @param $parametres
     */
    public function __construct($parametres) {
        $this->parametres = $parametres;
        $this->session = new Session();
    }


    /**
     * @return \App\Framework\Session
     */
    public function getSession() {
        return $this->session;
    }


    // Renvoie vrai si le paramètre existe dans la requête
    /**
     * @param $nom
     * @return bool
     */
    public function existeParametre($nom) {
        return (isset($this->parametres[$nom]) && $this->parametres[$nom] != "");
    }


    // Renvoie la valeur du paramètre demandé
    // Lève une exception si le paramètre est introuvable
    /**
     * @param $nom
     * @return mixed
     * @throws \Exception
     */
    public function getParametre($nom) {
        if ($this->existeParametre($nom)) {
            return $this->parametres[$nom];
        }
        else{
            throw new \Exception("Paramètre '$nom' absent de la requête");
        }
    }
}
