<?php

class User_model
{

    private $dataDummy = "Test";
    private $db;

    private function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        return $this->dataDummy;
    }

    public function example()
    {
        $this->db->query("SELECT * FROM ??");
        return $this->db->result();
    }
}
