<?php
require 'config.php';
require 'functions.php';      // Information pour la base de données

setLocalisation("41.40338 2.17403");
/* Creation des donnees */
/*$data = array(
  'action'        => 'put',
  'objectType'    => 'Produit',
  'objectId'      => 7,
  'objectData'    => array(
      'type'      => 'Film Blu-Ray',
      'title'     => 'Mon super film',
      'category'  => 'Action',
      'length'    => 92
  ),
);*/

/* Creation des options de contexte */
/*$options = array(
  'http' => array(
      'method'  => 'POST',
      'header'  => "Content-Type: application/json",
      'ignore_errors' => true,
      'timeout' =>  10,
      'content' => json_encode($data),
  ),
);*/

/* Creation du contexte HTTP */
//$context  = stream_context_create($options);

/* Execution de la requete */
//file_get_contents('https://localhost/index.php', false, $context);
?>
