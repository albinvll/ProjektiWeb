<?php
class Report{
    private $email;
    private $subject;
    private $content;

    public function __construct($email, $subject, $content){
        $this->email = $email;
        $this->subject = $subject;
        $this->content = $content;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getContent(){
        return $this->content;
    }
    public function setEmail($n){
        $this->email = $n;
    }
    public function setSubject($n){
        $this->subject = $n;
    }
    public function setContent($n){
        $this->content = $n;
    }
}
?>