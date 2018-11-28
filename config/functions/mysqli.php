<?php
/**
 * 
 */
class Database
{
    private $mysqli;

    public function __construct($host, $user, $pass, $db)
    {
        $this->mysqli = new mysqli($host, $user, $pass, $db);
        return $this->mysqli;
    }

    public function query($sql)
    {
        $this->dbk = $this->mysqli->query($sql);
        return $this->dbk;
    }

    public function num_rows($res)
    {
        return mysqli_num_rows($res);
    }

    public function fetch($res)
    {
        return mysqli_fetch_assoc($res);
    }

}