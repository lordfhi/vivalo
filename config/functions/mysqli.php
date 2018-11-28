<?php
/**
 * 
 */
class Database
{
    private $host;
    private $user;
    private $pass;
    private $db;
    public $mysqli;

    private function db_connect()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'vivalo';

        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $this->mysqli;
    }

    public function __construct()
    {
        $this->db_connect();
    }

    public function db_query($sql)
    {
        return $this->mysqli->query($sql);
    }

    public function db_num($sql)
    {
        $result = $this->db_query($sql);
        return $result->num_rows;
    }

}

$db = new Database;