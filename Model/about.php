<?php
require('db_connection.php');

class About{
    private $emri;
    private $mbiemri;
    private $profesioni;
    private $foto;

    public function __construct($emri,$mbiemri,$profesioni,$foto){
        $this->emri=$emri;
        $this->mbiemri=$mbiemri;
        $this->profesioni=$profesioni;
        $this->foto=$foto;
    }

    public function getId(){
        global $connection;
        $result = mysqli_query($connection,"SELECT id FROM about WHERE emri = '$this->emri'");
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }

    public function getEmri(){
        return $this->emri;
    }

    public function getMbiemri(){
        return $this->mbiemri;
    }

    public function getProfesioni(){
        return $this->profesioni;
    }

    public function getFoto(){
        return $this->foto;
    }


    public function setEmri($n){
        $this->emri=$n;
    }

    public function setMbiemri($n){
        $this->mbiemri=$n;
    }

    public function setProfesioni($n){
        $this->profesioni=$n;
    }

    public function setFoto($n){
        $this->foto=$n;
    }

    public function __toString(){
        return (string)($this->emri.' , '.$this->mbiemri.' , '.$this->profesioni.' , '.$this->foto);
    }
}

?>