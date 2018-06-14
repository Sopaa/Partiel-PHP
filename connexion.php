<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 14/06/2018
 * Time: 14:23
 */

try {
	$conn = new PDO('mysql:host=localhost;dbname=partiel_20180614', 'root', 'root');
} catch(PDOException $exception) {
	die("SA MARCH PAAAAAAAAA D:");
}