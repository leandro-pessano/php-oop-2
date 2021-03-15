<?php
require_once 'User.php';

class Moderator extends User {
  private $ruolo;

  public function __construct($_id, $_nome, $_cognome, $_email, $_username, $_ruolo) {
    parent::__construct($_id, $_nome, $_cognome, $_email, $_username);
    $this->ruolo = $_ruolo;
  }
}
