<?php
session_start();
require_once  __DIR__ . '/../db.php';
// $_SESSION["Name"] = $_POST["Name"];
// $_SESSION["Username"] = $_POST["Username"];
// $_SESSION["FamilyName"] = $_POST["FamilyName"];
// $_SESSION["password"] = hash('sha256',$_POST["password"]);
// $_SESSION["comfirmpassword"] = hash('sha256',$_POST["comfirmpassword"]); 


// $updat = $bdd->prepare('UPDATE jeux_video SET nom = :nomupdat , possesseur = :possesseurupdat , console = :consoleupdat , prix = :prixupdat , commentaires = :commentairesupdate WHERE ID = :idupdat ');
// $updat->execute(array(
// 'nomupdat' => $nomupdat ,
// 'possesseurupdat' => $possesseurupdat ,
// 'consoleupdat' => $consoleupdat ,
// 'prixupdat'=> $prixupdat ,
// 'idupdat'=> $idupdat,
// 'commentairesupdat'=>$commentairesupdat ));


$verifsql = 'SELECT Mail FROM Utilisateurs';
$sql = 'INSERT INTO Utilisateurs(Username,FamilyName,name,Date,Mail,Pwd) VALUES (:Username,:FamilyName,:name,:Date,:Mail,:Pwd)';

$query = $db->prepare($verifsql);
$query->execute();

$data = $query->fetchAll();

foreach ($data as $value) {
    if ($value["Mail"] == $_POST["email"]) {
        $_SESSION['error'] = 'Email already used by another user.';
        $existe = true;
        die();
    } else {
        $existe = false;
    }
}
var_dump($_POST);
$date = date('d.m.y');

if ((isset($existe)) and ($existe)) {
    $_SESSION['error'] = 'Email already used by another user.';
    header("Location: /index.php?name=Register");
    die();
} else {
    if (hash('sha256', $_POST["password"]) == hash('sha256', $_POST["confirmpassword"])) {
        $query = $db->prepare($sql);
        $query->execute([
            ':Username' => $_POST['Username'],
            ':FamilyName' => $_POST['Familyname'],
            ':name' => $_POST['Name'],
            ':Date' => $date,
            ':Mail' => $_POST['email'],
            ':Pwd' => hash('sha256', $_POST["password"])
        ]);
        $_SESSION['error'] = 'PERFECT, all has been done';
    } else {
        $_SESSION['error'] = 'Passwords doesn`t match';
        header("Location: /index.php?name=Register");
        die();
    }
}



if (isset($_SESSION["email"])) {
    if (($_SESSION["email"] == "gmail@gmail.com") and (hash('sha256', $_POST["password"]) == "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8")) {
        $_SESSION["Status"] = "ONLINE";
    };
};

if (!(isset($_SESSION["Status"])) or ($_SESSION["Status"] != "ONLINE")) {
    session_unset();
    session_destroy();
    header('Location: ../index.php?name=Login');
    die();
}

// collect from databas informations if Login and password are okay

header('Location: ../index.php?name=Home');