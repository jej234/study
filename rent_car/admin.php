<?php
session_start();
?>

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

    ?>

<section class="main-content admin-panel-content">

<div class="admin-menu">
        <h2>Меню администратора</h2>
        <ul>
            <li><a href="add_card.php">Добавить карточку</a></li>
            <li><a href="edit-card.php">Редактировать карточку</a></li>
            <li><a href="delete_card.php">Удалить карточку</a></li>
        </ul>
</div>
            
</section>

<?php
    include 'templates/footer.php';

    ?>