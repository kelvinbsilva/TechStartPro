<?php

class connection {

    public string $host ="localhost";
    public string $user ="super";
    public string $pass ="pegu-it07";
    public string $dbname = "olist";
    public int $port = 3306;
    public object $connect;

    public function conectar(): object {
        try{
            $this->connect = new PDO('mysql:host='. $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname,
            $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $ex) {
            die("Erro..." . $ex);
        }
    }

}
?>