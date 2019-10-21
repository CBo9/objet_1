<?php
require 'model/gestionMembres.php';
require 'class/membre.php';


class Controller{

    function inscription(array $donnees){
        $gestion = new GestionMembres();
        $membre = new Membre($donnees);
        $gestion->gestionInscription($membre);
        header('location: index.php?action=gestion');
    }

    function affichage(){
        $gestion = new GestionMembres();
        $affichage = $gestion->gestionAffichage();
        require 'view/gestion.php';
    }

    function suppression($id){
        $gestion = new GestionMembres();
        $gestion->gestionSuppression($id);
        header('location: index.php?action=gestion');
    }

    function modification($id,array $donnees){
        $gestion = new GestionMembres();
        $membre = new Membre($donnees);
        $membre->setId($id);
        $gestion->gestionModification($membre);
        header('location: index.php?action=gestion');    
    }

}