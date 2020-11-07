<?php

class connection {

    private string $host ="localhost";
    private string $user ="super";
    private string $pass ="pegu-it07";
    private string $dbname = "olist";
    private int $port = 3306;
    private object $connect;

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