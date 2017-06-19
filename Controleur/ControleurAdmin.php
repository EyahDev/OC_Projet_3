<?php

namespace Blog\Controleur;

use Blog\Modele\Billet;
use Blog\Modele\Commentaire;

class ControleurAdmin extends ControleurSecurise {

    // Déclaration des variables utiles au constructeur
    private $billets;
    private $commentaires;

    /**
     * ControleurAdmin constructor.
     */
    public function __construct() {
        $this->billets = new Billet();
        $this->commentaires = new Commentaire();
    }

    /*
     * Action par défaut du contrôleur
     */
    public function index() {
        // Récupération du nombres de signalements
        $nbSignalement = $this->commentaires->getNbSignalements();

        // Récuperation du login de la session en cours
        $login = $this->requete->getSession()->getAttribut('login');

        // Récuperation du message de confirmation de publication
        $messageConfirmation = $this->requete->getSession()->getMessageFlash();

        // Génère la vue pour l'affichage
        $this->genererVue(array(
            'nbSignalement' => $nbSignalement,
            'login' => $login,
            'messageConfirmation' => $messageConfirmation
        ));

    }

}