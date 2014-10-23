<?php

require_once 'Framework/Modele.php';

class User extends Modele
{

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     *
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connecter($login, $pwd)
    {
        $sql = "SELECT USER_ID FROM t_user WHERE USER_LOGIN=? AND USER_PWD=?";
        $utilisateur = $this->executerRequete($sql, array($login, $pwd));
        return ($utilisateur->rowCount() == 1);
    }

    /**
     * Renvoie un les informations d'un user existant dans la BD
     *
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUserInfo($login, $pwd)
    {
        $sql = "SELECT USER_ID AS id, INFO_CIVILITE AS civilite, INFO_NOM AS nom, INFO_PRENOM AS prenom
 FROM t_user NATURAL JOIN t_info WHERE USER_LOGIN=? AND USER_PWD=?";
        $utilisateur = $this->executerRequete($sql, array($login, $pwd));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch(); // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants
 fournis");
    }

}
