<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 14/06/2018
 * Time: 14:33
 */



require_once "connexion.php";
$requete = "INSERT INTO `message`(
  `id`,
  `posted_at`,
  `message`
)
VALUES(
  'id',
  'posted_at',
  :message
)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':message', $_POST['message']);
$stmt->execute();
header('Location: index.php');
