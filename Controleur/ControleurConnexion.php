<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ControleurPersonnalise.php';
require_once 'Modele/User.php';

class ControleurConnexion extends Controleur
{

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") &&
            $this->requete->existeParametre("pwd")
        ) {
            $login = $this->requete->getParametre("login");
            $pwd = sha1("36f938dd1deb0411" . $this->requete->getParametre("pwd"));
            if ($this->user->connecter($login, $pwd)) {
                $user = $this->user->getUserInfo($login, $pwd);

                // Enregistrement des infos de l'utilisateur dans la session
                $this->requete->getSession()->setAttribut('user', $user);

                $this->rediriger("accueil");
            } else {
                $this->genererVue(array('msgErreur' =>
                    'Login ou mot de passe incorrects'), "index");
            }
        } else {
            throw new Exception(
                "Action impossible : login ou mot de passe non défini");
        }
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("Connexion");
    }
}