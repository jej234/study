<?php 
    $cards = [
        1 => ["brand" => "Mercedes-Benz", "model" => "E-Class", "year" => "1999", "price" => "12000"],
        2 => ["brand" => "BMW", "model" => "M5", "year" => "2018", "price" => "4500"]
    ];

?>

<section class="main-content">

            <div class="banner">
                <img src="resources/1.jpg" alt="картинка автопрокат в Орле">
            </div>

            <h1>Выбирают у нас:</h1>
            <div class="grid-container">
                <div class="grid-cars">

                    <?php 
                        for ($i = 1; $i < 3; $i++) {
                            include("articles/main-card{$i}.php");
                        } 
                    
                    ?>
                    
                        
                        <!-- <div class="car_card">
                            <a href="car_page.html">
                                <div class="top_card">
                                    <img src="resources/2.png" alt="картинка автомобиля на карточке">
                                </div>
                                <div class="desc_card">
                                    <p>Марка и модель</p>
                                    <p>Год выпуска</p>
                                    <p>Цена</p>
                                </div>
                            </a>
                            </div>
                        <div class="car_card">
                            <a href="car_page.html">
                                <div class="top_card">
                                    <img src="resources/2.png" alt="картинка автомобиля на карточке">
                                </div>
                                <div class="desc_card">
                                    <p>Марка и модель</p>
                                    <p>Год выпуска</p>
                                    <p>Цена</p>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>

            <div class="more">
                <a href = "catalog.html">
                    <h2>Подробнее</h2>
                </a>
            </div>
</section> 