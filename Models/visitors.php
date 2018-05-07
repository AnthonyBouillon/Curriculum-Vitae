<?php

/**
 * Classe visitors qui hérite de la classe database.
 *
 */
class visitors extends dataBase {

    /**
     * Attributs :
     * ip : adresse ip.
     * timestamp : la date et l'heure courantes.
     * timestamp_before_5min : la date et l'heure, 5 minutes avant.
     * @var type string et int
     */
    public $ip;
    public $timestamp;
    public $timestamp_before_5min;

    // Contient la méthode construct de la classe "dataBase" qui permet la connexion à la base de données.
    function __construct() {
        parent::__construct();
    }

    /**
     * Méthode createIp qui permet d'insérer l'adresse ip et le timestamp de l'utilisateur.
     * @return boolean
     */
    public function createIp() {
        $query = 'INSERT INTO `visitors` (`ip`, `timestamp`) VALUES(:ip, :timestamp)';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $this->ip, PDO::PARAM_STR);
        $request->bindValue(':timestamp', $this->timestamp, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    /**
     * Méthode countIpbyIp qui permet de compter le nombre d'adresse ip qui correspond à celle de l'utilisateur.
     * @return type array
     */
    public function countIpbyIp() {
        $query = 'SELECT COUNT(`ip`) AS `number_userByIp` FROM `visitors` WHERE `ip`=:ip';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $this->ip, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_OBJ)->number_userByIp;
    }

    /**
     * Méthode countIp qui permet de compter le nombre d'adresse ip.
     * @return type array
     */
    public function countIp() {
        $query = 'SELECT COUNT(`ip`) AS `number_user` FROM `visitors`';
        $request = $this->db->prepare($query);
        $request->execute();
        return $request->fetch(PDO::FETCH_OBJ)->number_user;
    }

    /**
     * Méthode qui permet de modifier le timestamp qui correspond à l'adresse ip de l'utilisateur.
     * @return boolean
     */
    public function updateTimestamp() {
        $query = 'UPDATE `visitors` SET `timestamp`=:timestamp WHERE ip=:ip';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $this->ip, PDO::PARAM_STR);
        $request->bindValue(':timestamp', $this->timestamp, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    /**
     * Méthode qui permet de supprimer les données de l'utilisateur qui c'est connecté il y a plus de 5 minutes.
     * @return boolean
     */
    public function deleteVisitors() {
        $query = 'DELETE FROM `visitors` WHERE `timestamp` < :timestamp';
        $request = $this->db->prepare($query);
        $request->bindValue(':timestamp', $this->timestamp_before_5min, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }

    // Contient la méthode "__destruct" de la classe "dataBase" qui permet de fermer la connexion à la base de données.
    function __destruct() {
        parent::__destruct();
    }

}
