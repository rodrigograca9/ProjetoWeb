<?php
$user ='web';
$pass = 'web';
$database = 'grupo202';

try{
  $dbh = new PDO('mysql:host=localhost:3307;charset=utf8;dbname='.$database, $user, $pass);
}catch(PDOException $e){
  echo $e;
}

?>