<?php
session_start();
include "functions/db-connect.php"
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

<section class="main-content auth-content">

    
        <?php
        if(isset($_SESSION["add_card"])) {
                        echo '<div class="auth">
                        <p class="msg" style="color: green;">Карточка добавлена успешно</p>
                        </div>';
                    }
                    unset($_SESSION["add_card"]);
        
        ?>
    <div class="auth">
        <h1>Редактирование информации</h1>
        <form action="process_form.php" method="post">
            <div class="car-list">
            <?php
                $cars = get_card_list();
                foreach ($cars as $car) {
                    echo '<div class="car-item">
                    <input type="checkbox" name="selected_car_id" value="' . $car['car_id'] . '">
                    <span>' . $car['brand_name'] . ' ' . $car['car_model_name'] . ' (' . $car['release_date'] . ')</span>
                </div>';
                }
            ?>
            </div>
        <input type="submit" value="Submit">
        </form>
        </div>
            
        </section>

<?php
    include 'templates/footer.php';

    ?>