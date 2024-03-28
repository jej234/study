
    <section class="main-content catalog-content">

            <div id="sidebar">
                <div id="list-car-class">
                    <h2>Выбор авто:</h2>
                        <div class="btn-classes">
                            <form action="index.php" method="get">
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
                            <div class="inputs-price">
                                <input class="input-price-at" type="number" name="price-at" placeholder="от ₽" min="1000" max="90000">
                                <input class="input-price-from" type="number" name="price-from" placeholder="до ₽" min="1001" max="90000">
                            </div>
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
                            if ($cur_class == 0) {
                                echo "<h2 class=\"header-class-name\">Все автомобили</h2>";
                            } else {
                                echo "<h2 class=\"header-class-name\">$car_classes[$cur_class]</h2>";
                            }
                        ?>
                    
                </header>
                
                <div class="grid-cars grid-cars-catalog">
                    
                    <?php

                        for($i = $page*$num_of_cards; $i < $num_of_cards*($page+1); $i++) {
                                
                            if(!(isset($card_car[$i]))) {
                                break; 
                            } else {
                                include "articles/catalog_card{$card_car[$i]}.php";
                            }
                        }
                        
                    ?>           
                    
                </div>
                
                <div class="next-prev-page">
                    <a href="?p=catalog&class=<?php echo $cur_class?>&page_cat=<?php echo check_prev($page, $page_count)?>"><p><-Назад</p></a>
                    <?php for($i = 0; $i <= $page_count; $i++): ?>
                    <a href="?p=catalog&class=<?php echo $cur_class?>&page_cat=<?php echo $i ?>"><p><?php echo $i+1 ?></p></a>
                    <?php endfor; ?>
                    <a href="?p=catalog&class=<?php echo $cur_class?>&page_cat=<?php echo check_next($page, $page_count)?>"><p>Далее-></p></a>
                </div>

            </div>

    </section>
        