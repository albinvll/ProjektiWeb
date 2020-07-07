<?php
class News{
    private $title;
    private $description;

    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }

    public function getId(){
        global $connection;
        return mysqli_query($connection,"SELECT id FROM users WHERE title = '$this->title'");
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function __toString(){
            return (string)($this->title." - ".$this->description);
    }
}
?>