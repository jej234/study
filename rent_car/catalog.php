<?php
    $car_classes = array(1 => "Эконом класс", "Средний класс","Премиум класс");
?>    
    
    <section class="main-content catalog-content">

            <!-- <?php include('templates/sidebar.php') ?> -->

            <div id="sidebar">
                <div id="list-car-class">
                    <h2>Выбор авто:</h2>
                        <div class="btn-classes">
                            <form method="get">
                                <button id="btn-class" type="submit" name="class" value="1">Эконом класс</button>
                                <button id="btn-class">Средний класс</button>
                                <button id="btn-class">Премиум класс</button>
                            </form>
                        </div>
                </div>

                <div id="search-panel">
                    <h2>Поиск:</h2>
                    <div class="search-panel-content">
                        <div class="brand-cell">
                            <p>Марка:</p>
                            <div class="dropdown">
                                <div class="brand-choose">
                                    <button class="dropbtn">Выбрать...</button>
                                    <div class="dropdown-content">
                                        <a href="#">Марка 1</a>
                                        <a href="#">Марка 2</a>
                                        <a href="#">Марка 3</a>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="search-panel-year">
                            <p>Год:</p>
                            <input class="input-year" type="text" name="year" placeholder="Год">
                        </div>
                        <div class="search-panel-price">
                            <p>Стоимость: </p>
                            <input class="input-price-at" type="text" name="price-at" placeholder="от">
                            <input class="input-price-from" type="text" name="price-from" placeholder="до">
                        </div>
                        <button class="btn-accept">Поиск</button>
                    </div>
                    

                </div>
            </div>

            <div class="grid-container catalog">

                <header class="catalog-header">
                    <h1 class="header-page-name">Каталог автомобилей</h1>
                        <?php 
                            if (!(isset($_GET['class']))){
                                echo "<h2 class=\"header-class-name\">Все автомобили</h2>";
                            } else {
                                $get = $_GET["class"];
                                echo "<h2 class=\"header-class-name\">$car_classes[$get]</h2>";
                            }
                        ?>
                    
                </header>
                
                <div class="grid-cars grid-cars-catalog">
                    <div class="car_card car-card-catalog">
                    <a href="car_page.php?id=1">
                        <div class="top_card top-card-catalog">
                            <img src="resources/image_3.png" alt="картинка автомобиля на карточке">
                        </div>
                        <div class="desc_card-catalog">
                            <div class="card-price">
                                <p>12 000 ₽ в день</p>
                            </div>
                            <div class="card-properties">
                                <p>Mercedes-Benz E-Classe</p>
                                <p>1999 год</p>
                                <p>Автомат</p>
                            </div>
                            <div class="card-btn">
                                <button class="btn-detailed">Подробнее</button>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="car_card car-card-catalog">
                        <a href="car_page.php">
                            <div class="top_card top-card-catalog">
                                <img src="resources/2.png" alt="картинка автомобиля на карточке">
                            </div>
                            <div class="desc_card-catalog">
                                <div class="card-price">
                                    <p>4500₽ в день</p>
                                </div>
                                <div class="card-properties">
                                    <p>BMW M5</p>
                                    <p>2018</p>
                                    <p>Автомат</p>
                                </div>
                                <div class="card-btn">
                                    <button class="btn-detailed">Подробнее</button>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="car_card car-card-catalog">
                            <a href="car_page.html">
                                <div class="top_card top-card-catalog">
                                    <img src="resources/2.png" alt="картинка автомобиля на карточке">
                                </div>
                                <div class="desc_card-catalog">
                                    <div class="card-price">
                                        <p>4500₽ в день</p>
                                    </div>
                                    <div class="card-properties">
                                        <p>BMW M5</p>
                                        <p>2018</p>
                                        <p>Автомат</p>
                                    </div>
                                    <div class="card-btn">
                                        <button class="btn-detailed">Подробнее</button>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="car_card car-card-catalog">
                                <a href="car_page.html">
                                    <div class="top_card top-card-catalog">
                                        <img src="resources/2.png" alt="картинка автомобиля на карточке">
                                    </div>
                                    <div class="desc_card-catalog">
                                        <div class="card-price">
                                            <p>4500₽ в день</p>
                                        </div>
                                        <div class="card-properties">
                                            <p>BMW M5</p>
                                            <p>2018</p>
                                            <p>Автомат</p>
                                        </div>
                                        <div class="card-btn">
                                            <button class="btn-detailed">Подробнее</button>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="car_card car-card-catalog">
                                    <a href="car_page.html">
                                        <div class="top_card top-card-catalog">
                                            <img src="resources/2.png" alt="картинка автомобиля на карточке">
                                        </div>
                                        <div class="desc_card-catalog">
                                            <div class="card-price">
                                                <p>4500₽ в день</p>
                                            </div>
                                            <div class="card-properties">
                                                <p>BMW M5</p>
                                                <p>2018</p>
                                                <p>Автомат</p>
                                            </div>
                                            <div class="card-btn">
                                                <button class="btn-detailed">Подробнее</button>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                    
                </div>
                
                <div class="next-prev-page">
                    <a href="#"><p><-Назад</p></a>
                    <a href="#"><p>Далее-></p></a>
                </div>

            </div>

    </section>
        