<?php
namespace App\Framework;
class Session
{

    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();

        $this->generateCRSFToken();


    }

    /**
     * Génere un token
     */
    public function generateCRSFToken() {
        $token = bin2hex(random_bytes(32));

        if (!$this->existeAttribut("token")) {
            $this->setAttribut("token", $token);
        }

    }


    /**
     * Détruit la session
     */
    public function detruire()
    {
       session_destroy();
    }


    /**
     * @param $nom
     * @param $valeur
     */
    public function setAttribut($nom, $valeur)
    {
        $_SESSION[$nom] = $valeur;
    }


    /**
     * @param $nom
     * @return bool
     */
    public function existeAttribut($nom)
    {
        return (isset($_SESSION[$nom]) && $_SESSION[$nom] != "");
    }


    /**
     * @param $nom
     * @return mixed
     * @throws \Exception
     */
    public function getAttribut($nom)
    {
        if ($this->existeAttribut($nom)) {
            return $_SESSION[$nom];
        }
        else {
            throw new \Exception("Attribut '$nom' absent de la session");
        }
    }
}
