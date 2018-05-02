<?php

/**
 * Classe visitors
 *
 * @author Bonnie
 */
class visitors extends dataBase {
    /**
     * Attributs :
     * @var type string et int
     */
    public $ip;
    public $timestamp;
    public $timestamp_before_5min;

    // Contient la méthode construct de la classe "dataBase" qui permet la connexion à la base de données
    function __construct() {
        parent::__construct();
    }
    /**
     * @return boolean
     */
    public function createIp() {
        $query = 'INSERT INTO `visitors` (`ip`, `timestamp`) VALUES(:ip, :timestamp)';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $this->ip , PDO::PARAM_STR);
        $request->bindValue(':timestamp', $this->timestamp, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }
    /**
     * @return type array
     */
    public function countIpbyIp() {
        $query = 'SELECT COUNT(`ip`) AS `number_userByIp` FROM `visitors` WHERE `ip`=:ip';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $_SERVER['REMOTE_ADDR'] , PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_OBJ)->number_userByIp;
    }
        public function countIp() {
        $query = 'SELECT COUNT(`ip`) AS `number_user` FROM `visitors`';
        $request = $this->db->prepare($query);
        $request->execute();
        return $request->fetch(PDO::FETCH_OBJ)->number_user;
    }

        public function updateTimestamp() {
        $query = 'UPDATE `visitors` SET `timestamp`=:timestamp WHERE ip=:ip';
        $request = $this->db->prepare($query);
        $request->bindValue(':ip', $this->ip , PDO::PARAM_STR);
        $request->bindValue(':timestamp', $this->timestamp, PDO::PARAM_INT);
        if ($request->execute()) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;  
    }
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
    // Contient la méthode "__destruct" de la classe "dataBase" qui permet de fermer la connexion à la base de données
    function __destruct() {
        parent::__destruct();
    }
}