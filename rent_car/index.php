<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head-common.php' ?>
    <title>Прокат автомобилей в Орле</title>
</head>
<body>
    <main>

    <?php 

    include_once 'templates/header.php'; 
    include_once 'templates/navbar.php';
    include_once 'functions/scr-catalog.php';

    if (isset($_GET['p'])) {
        $page_id = $_GET['p'];
    } else { 
        $page_id = "main";
    }

    if (isset($_GET["class"])) {
        $page_id = "catalog";
    }

    include "{$page_id}.php";

    include 'templates/footer.php' 
    
    ?>