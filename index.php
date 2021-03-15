<?php
require_once 'User.php';

$user1 = new User(1,'Gianni','Rossi','giannirossi@gmail.com','Gianni88');
$user1->dataNascita = '02/10/1988';
try {
  $user1->setPassword('21088');
} catch(Exception $e) {
  echo $e->getMessage();
}
$user1->getPassword();
var_dump($user1);

$user2 = new User(2,'Pippo','Bianchi','pippo92@hotmail.it','Pippo92');
try {
  $user2->setPassword('abc123');
} catch(Exception $e) {
  echo $e->getMessage();
}
$user2->getPassword();
var_dump($user2)
?>
