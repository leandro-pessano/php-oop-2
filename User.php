<?php
require_once 'UserInfo.php';

class User {
  private $id;
  protected $nome;
  protected $cognome;
  protected $email;
  protected $username;
  private $password;
  public $dataNascita;
  public $avatar;

  use UserInfo;

  public function __construct($_id, $_nome, $_cognome, $_email, $_username) {
    $this->id = $_id;
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->username = $_username;
  }

  public function setPassword($_password) {
    if (strlen($_password) < 6) {
      throw new Exception('La password deve essere lunga almeno 6 caratteri');
    } else {
      $this->password = $_password;
    }
  }

  public function getPassword() {
    return $this->password;
  }
}
