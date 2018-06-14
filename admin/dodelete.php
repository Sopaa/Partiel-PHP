<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 14/06/2018
 * Time: 15:40
 */

require_once '../connexion.php';


$id = $_GET ['id'];

$requete = "DELETE FROM 
`message` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
header('Location: index.php');
