<?php
    $car_classes = array(1 => "Эконом класс", "Средний класс","Премиум класс");
    print_r($_POST);

    $card_car_classes = array(  
                                1=> array (1=> "1", "4"), 
                                2=> array(1=> "3"), 
                                3=> array(1=> "2", "5")
                            );

?>    
    
    <section class="main-content catalog-content">

            <div id="sidebar">
                <div id="list-car-class">
                    <h2>Выбор авто:</h2>
                        <div class="btn-classes">
                            <form action="index.php" method="post">
                                <?php foreach ($car_classes as $class_id => $class_name) {
                                    echo "<button id='btn-class' type='submit' name='class' value='$class_id'>$class_name</button>";
                                } ?>
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
                            if (!(isset($_POST['class']))){
                                echo "<h2 class=\"header-class-name\">Все автомобили</h2>";
                            } else {
                                $cur_class = $_POST["class"];
                                echo "<h2 class=\"header-class-name\">$car_classes[$cur_class]</h2>";
                            }
                        ?>
                    
                </header>
                
                <div class="grid-cars grid-cars-catalog">
                    
                    <?php

                        if (isset($_POST["class"])) {
                            $ch_class = $_POST['class'];
                            foreach($card_car_classes[$ch_class] as $key => $value) {
                                include "articles/catalog_card{$value}.php";
                            }   
                        } else {
                            $out_arr = count($card_car_classes, COUNT_RECURSIVE);
                            $in_arr = count($card_car_classes, COUNT_RECURSIVE);
                            for($i = 1; $i < 6)
                                include "articles/catalog_card{$value}.php";
                            
                        }
                    ?>           
                    
                </div>
                
                <div class="next-prev-page">
                    <a href="#"><p><-Назад</p></a>
                    <a href="#"><p>Далее-></p></a>
                </div>

            </div>

    </section>
        