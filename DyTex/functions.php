<?php
function getLocalisation($loc){
  $pdo = new PDO("mysql:host=localhost;dbname=woura", 'root');
  $req = 'SELECT * FROM woura WHERE localisation = '.$loc.';';
  $stmt = $pdo->prepare($req);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
function setLocalisation($loc){
  $pdo = new PDO("mysql:host=localhost;dbname=woura", 'root');
  $req = 'INSERT INTO woura (localisation) VALUES ('.$loc.');';
  $stmt = $pdo->prepare($req);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  var_dump($row['localisation']);
}
