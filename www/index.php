<?php
session_start();
$page_title = 'Unknown page?';
$existing_pages = ['Home', 'Cart', 'Login', 'Register', 'Posts', 'Shop'];

if (empty($_GET['name']) == false) {
    if (in_array($_GET['name'], $existing_pages)) {
        $page = $_GET['name'];
    } else {
        $page = "404";
    }
}else {
    $page = "Home";
} 


include __DIR__ . '/../src/views/pages/' . $page . '.php'; // $content
include __DIR__ . "/../src/views/partials/header.php"; // $header
include __DIR__ . "/../src/views/partials/footer.php"; // $footer
require_once __DIR__ . '/../src/views/pages/Template.php';

?>