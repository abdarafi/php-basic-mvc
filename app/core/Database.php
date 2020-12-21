<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        try {
            $this->dbh = pg_connect('host=' . $this->host . ' dbname=' . $this->db_name . ' user=' . $this->user . ' password=' . $this->pass);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = pg_query($this->dbh, $query);
    }

    public function result()
    {
        return pg_fetch_assoc($this->stmt);
    }
}
