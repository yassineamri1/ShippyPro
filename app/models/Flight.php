<?php

class Flight
{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAirports() {
        $this->db->query('SELECT * FROM airports');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getFlights() {
        $this->db->query('SELECT * FROM flights');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCodeByName($name) {
        $this->db->query('SELECT code FROM airports WHERE name = :name');

        $this->db->bind(':name', $name);

        $results = $this->db->resultSet();
        return $results;
    }

}
