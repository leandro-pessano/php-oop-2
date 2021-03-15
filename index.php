<?php
require_once 'User.php';
require_once 'Moderator.php';

$user1 = new User(1,'Gianni','Rossi','giannirossi@gmail.com','Gianni88');
$user1->dataNascita = '02/10/1988';
try {
  $user1->setPassword('21088');
} catch(Exception $e) {
  echo $e->getMessage();
}
$user1->getPassword();
var_dump($user1);

$user2 = new User(2,'Pippo','Bianchi','pippo92@hotmail.it','SuperPippo');
try {
  $user2->setPassword('abc123');
} catch(Exception $e) {
  echo $e->getMessage();
}
$user2->getPassword();
$user2->informazioni = 'Sono Pippo e sono un personaggio di Topolino';
$user2->hobbies = 'Mangiare noccioline';
var_dump($user2);

$moderator1 = new Moderator(1,'Paperino','Verdi','paperino@gmail.com','PaolinoPaperino', 'Moderatore sezione blog 1');
try {
  $moderator1->setPassword('passwordlunga');
} catch(Exception $e) {
  echo $e->getMessage();
}
$moderator1->getPassword();
var_dump($moderator1);
?>
