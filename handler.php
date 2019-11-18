<?php
/**
 * Connexion simple à la base de données via PDO !
 */
require_once('data/database.php');
require_once('function/trtform.php');
/**
 * On doit analyser la demande faite via l'URL (GET) afin de déterminer si on souhaite récupérer les messages ou en écrire un
 */
$task = "list";
if(array_key_exists("task", $_GET)){
  $task = $_GET['task'];
}
if($task == "write"){
  postMessage();
} else {
  getMessages();
}