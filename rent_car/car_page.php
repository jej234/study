<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head-common.php' ?>
    <title>Прокат автомобилей в Орле</title>
</head>
<body>
    <main>

    <?php 

    include 'templates/header.php'; 
    include 'templates/navbar.php';
    
    if (isset($_GET['id'])) {
        $article_id = $_GET['id'];
        
    } 

    include "articles/art{$article_id}-car_page.php";
    include 'templates/footer.php';

    ?>