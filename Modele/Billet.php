<?php

namespace App\Modele;

use App\framework\Modele;
use Couchbase\Exception;

class Billet extends Modele
{
    /**
     * @return \App\Framework\PDOStatement
     */
    public function getBillets()
    {
        $sql = 'select id as id, titre as titre,'
            . 'chapo as chapo, date as date, auteur as auteur from billet'
            . ' order by id desc ';

        $billets = $this->executerRequete($sql);
        return $billets;

    }


    /**
     * @param $idBillet
     * @return mixed
     * @throws \Exception
     */
    public function getBillet($idBillet)
    {
        $sql = 'SELECT id AS id, titre AS titre,'
            . 'chapo as chapo, contenu as contenu,'
            . 'auteur as auteur, date as date from billet where id=?';

        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();
        else
            throw new \Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");

    }
}


