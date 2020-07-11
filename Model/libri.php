<?php
require('db_connection.php');

class Libri{
    private $title;
    private $price;
    private $photo;
    private $author;
    private $date;
    private $userID;

    public function __construct($title,$price,$photo,$author,$date,$userID){
        $this->title=$title;
        $this->price=$price;
        $this->photo=$photo;
        $this->author=$author;
        $this->date=$date;
        $this->userID=$userID;
    }

    public function getId(){
        global $connection;
        $result = mysqli_query($connection,"SELECT id FROM libri WHERE title = '$this->title'");
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getDate(){
        return $this->date;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function setTitle($n){
        $this->title=$n;
    }

    public function setPrice($n){
        $this->price=$n;
    }

    public function setPhoto($n){
        $this->photo=$n;
    }

    public function setAuthor($n){
        $this->author=$n;
    }

    public function setDate($n){
        $this->date=$n;
    }

    public function setUserID($n){
        $this->userID = $n;
    }
    

    public function __toString(){
        return (string)($this->title.' , '.$this->price.' , '.$this->author.' , '.$this->date);
    }
}

?>