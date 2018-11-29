<?php
/**
 * 
 */
class Database
{
    public $connection;

    public function __construct($host, $user, $pass, $db)
    {
        $this->connection = mysqli_connect($host, $user, $pass, $db);
        return $this->connection;
    }

    public function query($sql)
    {
        return mysqli_query($this->connection, $sql);
    }

    public function num_rows($res)
    {
        return mysqli_num_rows($res);
    }

    public function fetch($res)
    {
        return mysqli_fetch_assoc($res);
    }

    public function get($res)
    {
        return mysqli_fetch_row($res);
    }

    public function last_id()
    {
        return mysqli_insert_id($this->connection);
    }

}