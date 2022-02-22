<?php
session_start();
require_once  __DIR__ . '/../db.php';

$verifsql = 'SELECT IdUser FROM Articles';
$insertPost = 'INSERT INTO Articles(Categories,Name,weight,Length,DateBirth,Color,Race,IdUser,Description,Url ) 
VALUES (:Categories,:Name,:weight,:Length,:DateBirth,:Color,:Race,:IdUser,:Description,:Url)';

$dataform = $_POST;
$id = $_SESSION["Id"];
var_dump($dataform, $id);

// $query = $db->prepare($verifsql);
// $query->execute();

if($_SESSION["Status"] == "ONLINE"){
    $query = $db->prepare($insertPost);
    $query->execute([
        ':Categories' => $_POST['category'],
        ':Name' => $_POST['fullname'],
        ':weight' => $_POST['weight'],
        ':Length' => $_POST['height'],
        ':DateBirth' => $_POST['date'],
        ':Color' => $_POST["color"],
        ':Race' => $_POST["race"],
        ':IdUser' => $id,
        ':Description' => $_POST["comment"],
        ':Url' => $_POST["url"]
    ]);

    header('Location: ../index.php?name=Home');
    
}