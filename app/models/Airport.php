<?php

class Airport {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAirports() {
        $this->db->query('SELECT * FROM airports');

        $results = $this->db->resultSet();

        return $results;
    }
}
