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

    $car_row = get_data_car_page($article_id);
    //include "articles/art{$article_id}-car_page.php";
    ?>

    <?php foreach($car_row as $val): ?>
        <section class="main-content car-page-content">
            <div class="car-page-container">
                <header class="car-page-header">
                    <h1><?=$val["brand_name"] ?></h1>
                </header>
                <section class="wrap-car-image-spec">
                <div class="car-images">
                    <div class="choosen-car-image">
                        <img class="chosen-image" src="resources/mb3.jpg" alt="">
                    </div>
                    <div class="gallery-car-images">
                        <div class="wrap-inactive-img">
                            <img class="inactive-image" src="resources/mb3.jpg" alt="">
                        </div>
                        <div class="wrap-inactive-img">
                            <img class="inactive-image" src="resources/mb1.jpg" alt="">
                        </div>
                        <div class="wrap-inactive-img">
                            <img class="inactive-image" src="resources/mb2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="car-specifications">
                    <ul class="header-car-spec">
                        <li><h3>Класс:</h3></li>
                        <li><h3>Модель:</h3></li>
                        <li><h3>Год выпуска:</h3></li>
                        <li><h3>Тип кузова:</h3></li>
                        <li><h3>КПП:</h3></li>
                        <li><h3>Цвет:</h3></li>
                    </ul>
                    <ul class="car-spec-values">
                        <li><h3><?=$val["car_class_name"] ?></h3></li>
                        <li><h3><?=$val["car_model_name"] ?></h3></li>
                        <li><h3><?=$val["release_date"] ?></h3></li>
                        <li><h3>седан</h3></li>
                        <li><h3>автомат</h3></li>
                        <li><h3>синий</h3></li>
                    </ul>
                </div>
                </section>
                <div class="car-description">
                    <header class="header-desc">
                        <h3>Описание:</h3>
                    </header>
                    <div class="text-description">
                        <p>Наша компания предлагает общедоступную аренду 
                            автомобилей для всех категорий пользователей. 
                            У вас пока нет своей машины, вы приехали в наш город в гости или по делам? Возьмите напрокат 
                            Mercedes-Benz E-Classe, который обеспечит все ваши 
                            потребности в комфортном передвижении. Просторный 
                            салон седана вмещает в себя пять пассажиров, поддерживается 
                            комфортный микроклимат зимой и летом. </p>
                    </div>
                </div>
            </div>
        </section>

        <?php endforeach ?>

    <?php
    include 'templates/footer.php';

    ?>