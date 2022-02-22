<?php
session_start();
require_once  __DIR__ . '/../db.php';

$mail = htmlspecialchars($_POST["email"]);
$mdp = hash("sha256", htmlspecialchars($_POST["password"]));

$emails  = "SELECT Mail FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";

$_SESSION['error'] = $emails;
$mdpacurratoToemail = '';

if (isset($_POST["email"])) {
    $query = $db->prepare($emails);
    $query->execute();
    $data = $query->fetchAll();
    if ($data[0]["Mail"] == htmlspecialchars($_POST["email"])) {
        $_SESSION["Email"] = htmlspecialchars($_POST["email"]);
        $_SESSION["Status"] = "ONLINE";

        // Name collect in database
        $nom  = "SELECT Name FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";
        $query = $db->prepare($nom);
        $query -> execute();
        $data = $query->fetchAll();
        $_SESSION["Name"] = $data[0]["Name"];

        // FamilyName collect in database
        $familyname  = "SELECT FamilyName FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";
        $query = $db->prepare($familyname);
        $query -> execute();
        $data = $query->fetchAll();
        $_SESSION["FamilyName"] = $data[0]["FamilyName"];

        //Username
        $username  = "SELECT Username FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";
        $query = $db->prepare($username);
        $query -> execute();
        $data = $query->fetchAll();
        $_SESSION["Username"] = $data[0]["Username"];

        //ID
        $IDuser  = "SELECT ID FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";
        $query = $db->prepare($IDuser);
        $query -> execute();
        $data = $query->fetchAll();
        $_SESSION["Id"] = $data[0]["ID"];

        //Admin ?
        $admin  = "SELECT ADMIN FROM Utilisateurs as U WHERE U.Mail = '$mail' AND U.Pwd = '$mdp' ";
        $query = $db->prepare($admin);
        $query -> execute();
        $data = $query->fetchAll();
        $_SESSION["Admin"] = $data[0]["ADMIN"];
        header('Location: ../index.php?name=Home');
        die();
    };
};

if (!(isset($_SESSION["Status"])) or ($_SESSION["Status"] != "ONLINE")) {
    session_unset();
    session_destroy();
    header('Location: ../index.php?name=Login');
    die();
}; 

// collect from databas informations if Login and password are okay

/* header('Location: ../index.php?name=Home'); */