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


    /**
     * @param $billet
     */
    public function modifierBillet( $billet)
    {
        $sql = 'UPDATE billet SET titre = :titre, chapo = :chapo, contenu = :contenu, auteur = :auteur, date= NOW() WHERE id = :id';



        $this->executerRequete($sql, [
            'titre' => $billet['titre'],
            'chapo' => $billet['chapo'],
            'contenu' => $billet['contenu'],
            'auteur' => $billet['auteur'],
            'id' => $billet['id']
        ]);

    }


    /**
     * @param $titre
     * @param $chapo
     * @param $contenu
     * @param $auteur
     */
    public function creerPost($titre, $chapo, $contenu, $auteur)
    {
        $sql = 'INSERT INTO billet(titre, chapo, contenu, auteur, date) VALUES (?,?,?,?,?);';
        $date = date(DATE_W3C);
        $this->executerRequete($sql, array($titre, $chapo, $contenu, $auteur, $date));

    }


    // public function valider() à ajouter pour controler toutes les entrées des formulaires de billets


}
