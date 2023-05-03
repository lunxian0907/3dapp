<?php

require_once 'database/Database.php';

class Model {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getById($id) {
        $stmt = $this->db->prepare('SELECT * FROM models WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function getAll() {
        $stmt = $this->db->prepare('SELECT * FROM models');
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

?>
