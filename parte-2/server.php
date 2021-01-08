<?php
  // rimanda al PHP con il database nella cartella parte-1
  require_once __DIR__ .'/../parte-1/db.php';

  header('Content-Type: application/json');

  header('Access-Control-Allow-Origin: *');

  echo json_encode($dischi);

?>
