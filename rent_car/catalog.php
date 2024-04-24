
    <section class="main-content catalog-content">

            <div id="sidebar">
                <div id="list-car-class">
                    <h2>Выбор авто:</h2>
                        <div class="btn-classes">
                            <form action="index.php" method="get">
                                <?php 
                                    $class_arr = get_classes();
                                    foreach ($class_arr as $val):
                                ?>
                                    <button id='btn-class' type='submit' name='class' value="<?=$val["car_class_id"] ?>"><?=$val["car_class_name"] ?></button>;
                                
                                <?php endforeach ?>
                            </form>
                        </div>
                </div>

                <div id="search-panel">
                    <form action="index.php" method="post">
                        
                    <h2>Поиск:</h2>
                    <div class="search-panel-content">
                        <div class="brand-cell">
                            <p>Марка:</p>
                            <div class="dropdown">
                                <select name="brand">
                                <div class="brand-choose">
                                    <div class="dropdown-content">
                                        <option value="0">Все</option>
                                        <?php
                                            $brands_arr = get_brands(); 
                                            foreach ($brands_arr as $val): ?>
                                        <option value=<?=$val["brand_id"] ?>><?=$val["brand_name"] ?></option>
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
                                <?php 
                                    $year = get_year();
                                    foreach ($year as $val): 
                                ?>
                                    <option value=<?=$val["release_date"] ?>><?=$val["release_date"] ?></option>
                                <?php endforeach; ?>
                            </select>
                                
                        </div>
                        <!-- <div class="search-panel-price">
                            <p>Стоимость: </p>
                            <div class="inputs-price">
                                <input class="input-price-at" type="number" name="price-at" placeholder="от ₽" min="1000" max="90000">
                                <input class="input-price-from" type="number" name="price-from" placeholder="до ₽" min="1001" max="90000">
                            </div>
                        </div> -->
                        <button name="btn1" value="form1" type="submit" class="btn-accept">Поиск</button>
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
                                $class_arr = get_classes($cur_class);
                                foreach ($class_arr as $val) {
                                echo "<h2 class=\"header-class-name\">" . $val["car_class_name"] . "</h2>";
                                }
                            }
                    ?>
                    
                </header>
                
                <div class="grid-cars grid-cars-catalog">
                    
                <?php foreach($card_car as $val_card): ?>
                <div class="car_card car-card-catalog">
                        <a href="car_page.php?id=<?=$val_card["car_id"] ?>">
                            <div class="top_card top-card-catalog">
                                <img src="<?=$val_card["link_card_image"] ?>" alt="картинка автомобиля на карточке">
                            </div>
                            <div class="desc_card-catalog">
                                <div class="card-price">
                                    <p><?=$val_card["rent_price"]+0 ?>₽ в день</p>
                                </div>
                                <div class="card-properties">
                                    <p><?=$val_card["brand_name"] ?> <?=$val_card["car_model_name"] ?></p>
                                    <p><?=$val_card["release_date"] ?></p>
                                    <p><?=$val_card["transmission_name"] ?></p>
                                </div>
                                <div class="card-btn">
                                    <button class="btn-detailed">Подробнее</button>
                                </div>
                            </div>
                        </a>
                        </div>
                <?php endforeach ?>

                    
                    
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

        