<?php

class User {
  public $name;

  public $surname;

  public $email;

  public $password;

  public $comment = false;

  public $eta;

  public function __construct($_name, $_surname, $_email, $_password, $_eta) {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->password = $_password;
    $this->eta = $_eta;
  }

  public function getUserData(){
    $canComment = 'no';
    if($this->comment === true){
      $canComment = 'yes';
    }
    return [
      'name' => $this->name,
      'surname' => $this->surname,
      'email' => $this->email,
      'password' => $this->password,
      'eta' => $this->eta,
      'comment' => $canComment
    ];
  }

  public function canComment(){
      if($this->eta > 18){
        $this->comment = true;
      }
    }
}

?>
