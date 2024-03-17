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

    if (isset($_GET['p'])) {
        $page_id = $_GET['p'];
        
    } else { 
        $page_id = "main";
    }

    include "{$page_id}.php";

    include 'templates/footer.php' 
    
    ?>