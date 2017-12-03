<?php

namespace App\Controleur;

use App\Framework\Controleur;
use App\Modele\Billet;
use App\Framework\Session;
use App\Framework\Requete;

class ControleurAccueil extends Controleur
{


    /**
     * Méthode abstraite correspondant à l'action par défaut
     * Oblige les classes dérivées à implémenter cette action par défaut
     */
    public function index()
    {

        $errors = [];
        $input = [];


        if ($this->requete->existeParametre('envoyer')) {

            if ($this->requete->existeParametre('nom') === false) {
                $errors[] = "Vous n'avez pas renseigné votre nom";
                //  $this->requete->getSession()->flash("Vous n'avez pas renseignez votre nom");
            } else {
                $input['nom'] = $this->requete->getParametre('nom');
            }

            if ($this->requete->existeParametre('email') === false || filter_var($this->requete->existeParametre('email'), FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Vous n'avez pas renseigné un email valide";
                //$this->requete->getSession()->flash("Vous n'avez pas renseignez un mail valide");
            } else {
                $input['email'] = $this->requete->getParametre('email');
            }

            if ($this->requete->existeParametre('message') === false ) {
                $errors[] = "Vous n'avez pas renseigné votre message";
                //$this->requete->getSession()->flash("Vous n'avez pas renseignez votre message");
            } else {
                $input['message'] = $this->requete->getParametre('message');
            }
            //$this->requete->getSession()->getAttribut() a remplacer
            if (count($errors) === 0) {

                $message = $this->requete->getParametre('message');
                $headers = 'FROM: julienbutty@gmail.com';

                mail('julienbutty@gmail.com', 'Formulaire de contact', $message, $headers);


                $this->requete->getSession()->detruire();

                $this->rediriger("accueil", "index");





            }
        }


        $this->genererVue( array('errors' => $errors));

    }
}
