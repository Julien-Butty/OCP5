<?php

Namespace App\Controleur;

use App\framework\Controleur;
use App\Modele\Billet;
use App\Framework\Modele;
use App\Framework\Session;


class ControleurBillet extends Controleur
{
    /**
     * @var Billet
     */
    private $billet;

    /**
     * ControleurBillet constructor.
     */
    public function __construct()
    {
        $this->billet = new Billet();
    }


    public function index()
    {
        $billets = $this->billet->getBillets();
        $this->genererVue(array('billets' => $billets));
    }


    public function read()
    {
        $idBillet = $this->requete->getParametre("id");

        $billet = $this->billet->getBillet($idBillet);


        $this->genererVue(array('billet' => $billet));
    }


}



