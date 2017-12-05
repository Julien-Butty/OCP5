<?php

namespace App\Framework;

/**
 * Class Configuration
 * @package App\Framework
 */
class Configuration {
    /**
     * @var
     */
    private static $parametres;


    // Renvoie la valeur d'un paramètre de configuration

    /**
     * @param $nom
     * @param null $valeurParDefaut
     * @return mixed|null
     */
    public static function get($nom, $valeurParDefaut = null) {
        $parametre= self::getParametres();
        if (isset($parametre[$nom])) {
            $valeur = $parametre[$nom];
        }
        else {
            $valeur = $valeurParDefaut;
        }
        return $valeur;
    }


    // Renvoie le tableau des paramètres en le chargeant au besoin

    /**
     * @return array|bool
     * @throws \Exception
     */
    private static function getParametres() {
        if (self::$parametres === null) {
            $cheminFichier = "Config/dev.ini";
            if (!file_exists($cheminFichier)) {
                $cheminFichier = "Config/prod.ini";
            }
            if (!file_exists($cheminFichier)) {
                throw new \Exception("Aucun fichier de configuration trouvé");
            }
            else {
                self::$parametres = parse_ini_file($cheminFichier );
            }
        }
        return self::$parametres;
    }
}
