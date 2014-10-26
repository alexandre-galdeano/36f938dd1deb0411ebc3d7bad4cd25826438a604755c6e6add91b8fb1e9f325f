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
        $sql = "SELECT USER_ID AS id, USER_LOGIN AS login, INFO_CIVILITE AS civilite, INFO_NOM AS nom, INFO_PRENOM AS prenom
 FROM t_user NATURAL JOIN t_info WHERE USER_LOGIN=? AND USER_PWD=?";
        $utilisateur = $this->executerRequete($sql, array($login, $pwd));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch(); // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants
 fournis");
    }

    public function setUserInfo($id, $civilite, $nom, $prenom, $courriel)
    {
        $sql = "UPDATE t_info SET INFO_CIVILITE= ?, INFO_NOM = ?, INFO_PRENOM= ?,
 INFO_COURRIEL= ? WHERE USER_ID = ?";
        $this->executerRequete($sql, array($civilite, $nom, $prenom, $courriel, $id));
    }

    /**
     * Précondition : le pwd original a été vérifié,
     * le pwd_new a été entré deux fois
     * @param $login
     * @param $pwd_old
     * @param $pwd_new
     * @throws Exception
     * @return mixed
     */
    public function setNewUserPwd($login, $pwd_old, $pwd_new)
    {
        try {
            $info = getUserInfo($login, $pwd_old);
            $sql = "UPDATE t_user SET USER_PWD = ? WHERE USER_ID = ?";
            $this->executerRequete($sql, array($pwd_new, $info['id']));
        } catch (Exception $e) {
            throw new Exception("Mot de passe incorrect.");
        }
    }

    /**
     * Précondition : le pwd original a été vérifié,
     * le pwd_new a été entré deux fois
     * @param $login
     * @param $pwd_new
     * @internal param $pwd_old
     * @return mixed
     */
    public function setUserPwd($login, $pwd_new)
    {
        $id = getIdFromLoginUser($login);
        $sql = "UPDATE t_user SET USER_PWD = ? WHERE USER_ID = ?";
        $this->executerRequete($sql, array($pwd_new, $id));
    }

    /**
     * Précondition : le pwd original a été vérifié,
     * le pwd_new a été entré deux fois
     * @param $login
     * @param $pwd_new
     * @param $code
     * @internal param $pwd_old
     * @return mixed
     */
    public function setUserPwdWithCode($login, $pwd_new, $code)
    {
        if ($code == sha1($login))
            $id = getIdFromLoginUser($login);
        $sql = "UPDATE t_user SET USER_PWD = ? WHERE USER_ID = ?";
        $this->executerRequete($sql, array($pwd_new, $id));
    }

    /**
     * Permet d'obtenir l'id du user depuis son
     * login
     * @param $login
     * @return mixed
     * @throws Exception
     */
    public function getIdFromLoginUser($login)
    {
        $sql = "SELECT USER_ID AS id FROM t_user WHERE USER_LOGIN=?";
        $ID = $this->executerRequete($sql, array($login));
        if ($ID->rowCount() == 1)
            return $ID->fetch(); // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond au login : " . $login);
    }
}
