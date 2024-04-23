

<section class="main-content">

            <div class="banner">
                <img src="resources/1.jpg" alt="картинка автопрокат в Орле">
            </div>

            <h1>Выбирают у нас:</h1>
            <div class="grid-container">
                <div class="grid-cars">

                <?php 
                    $main_cards = get_main_card_data(4);
                    foreach($main_cards as $val):
                ?>

                <div class="car_card">
                        <a href="car_page.php?id=<?=$val["car_id"] ?>">
                            <div class="top_card">
                                <img src=<?=$val["link_card_image"]?> alt="картинка автомобиля на карточке">
                            </div>
                            <div class="desc_card">
                                <p><?php echo $val["brand_name"]; echo " ".$val["car_model_name"]; ?></p>
                                <p><?=$val["release_date"] ?></p>
                                <p><?=$val["rent_price"]+0 ?>₽</p>
                            </div>
                        </a>
                </div>

                <?php endforeach; ?>  
                </div>
            </div>

            <div class="more">
                <a href = "index.php?p=catalog">
                    <h2>Подробнее</h2>
                </a>
            </div>
</section> 