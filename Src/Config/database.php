<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "leagueoflegends";
    private $connect;

    public function connect()
    {
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        return $this->connect;
    }
}
