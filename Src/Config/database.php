<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "leagueoflegends";

    public function connect()
    {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        return $conn;
    }
}
