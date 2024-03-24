<?php

    $brands = [1=> "Mercedes-Benz", "Renault", "Fiat", "LADA", "Toyota", "BMW"];
    $year = [1=> "2024", "2023", "2022", "2021"];

    $car_classes = array(1 => "Эконом класс", "Средний класс","Премиум класс");
    print_r($_POST);
    $cur_class;

    if (!isset($_POST['class'])) {
        $cur_class = NULL;
    } else {
        $cur_class = $_POST['class'];
    }

    $num_of_cards = 3;
    $card_car_classes = array(  
                                1=> array(1=> "1", "4"), 
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
                    <form action="form.php" method="post">
                        
                    <h2>Поиск:</h2>
                    <div class="search-panel-content">
                        <div class="brand-cell">
                            <p>Марка:</p>
                            <div class="dropdown">
                                <select name="brand">
                                <div class="brand-choose">
                                    <div class="dropdown-content">
                                        <option value="0">Все</option>
                                        <?php foreach ($brands as $key => $value): ?>
                                        <option value=<?php echo $key ?>><?php echo $value ?></option>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                </select>
                              </div>
                        </div>
                        <div class="search-panel-year">
                            <p>Год:</p>
                            <select name="year">
                                <option value="0">Любой</option>
                                <?php foreach ($year as $key => $value): ?>
                                    <option value=<?php echo $key ?>><?php echo $value ?></option>
                                <?php endforeach; ?>
                            </select>
                                
                        </div>
                        <div class="search-panel-price">
                            <p>Стоимость: </p>
                            <input class="input-price-at" type="number" name="price-at" placeholder="от ₽" min="1000" max="90000">
                            <input class="input-price-from" type="number" name="price-from" placeholder="до ₽" min="1001" max="90000">
                        </div>
                        <button type="submit" class="btn-accept">Поиск</button>
                    </div>
                    </form>

                </div>
            </div>

            <div class="grid-container catalog">

                <header class="catalog-header">
                    <h1 class="header-page-name">Каталог автомобилей</h1>
                        <?php 
                            if (!(isset($cur_class))) {
                                echo "<h2 class=\"header-class-name\">Все автомобили</h2>";
                            } else {
                                echo "<h2 class=\"header-class-name\">$car_classes[$cur_class]</h2>";
                            }
                        ?>
                    
                </header>
                
                <div class="grid-cars grid-cars-catalog">
                    
                    <?php

                        if (isset($cur_class)) {
                            foreach($card_car_classes[$cur_class] as $key => $value) {
                                include "articles/catalog_card{$value}.php";
                            }   
                        } else {
                            $out_arr = count($card_car_classes);
                            
                            for($i = 1; $i <= $out_arr; $i++) {
                                $in_arr = count($card_car_classes[$i]);
                                
                                for($j = 1; $j <= $in_arr; $j++, $num_of_cards--) {
                                    if ($num_of_cards != 0) {
                                        include "articles/catalog_card{$card_car_classes[$i][$j]}.php";
                                    } else {
                                        break;
                                    }
                                }    
                            }
                        }
                    ?>           
                    
                </div>
                
                <div class="next-prev-page">
                    <a href="#"><p><-Назад</p></a>
                    <a href="#"><p>Далее-></p></a>
                </div>

            </div>

    </section>
        