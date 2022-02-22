<?php
require_once  __DIR__ . '/../../../www/db.php';
$countArticle = 'SELECT COUNT(IDarticles) FROM Articles';
$query = $db->prepare($countArticle);
$query->execute();
$nbArticle = $query->fetch();
$index = 0;

$getname = 'SELECT Name FROM Articles';
$query = $db->prepare($getname);
$query->execute();
$nameAnimal = $query->fetchAll();

$getcategories = 'SELECT Categories FROM Articles';
$query = $db->prepare($getcategories);
$query->execute();
$categorieAnimal = $query->fetchAll();
?>