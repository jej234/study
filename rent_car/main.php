<section class="main-content">

            <div class="banner">
                <img src="resources/1.jpg" alt="картинка автопрокат в Орле">
            </div>

            <h1>Выбирают у нас:</h1>
            <div class="grid-container">
                <div class="grid-cars">

                <?php     
                    for ($i = 1; $i < 5; $i++) {
                            include("articles/main-card{$i}.php");
                        }
                ?>
                        
                    </div>
                </div>

            <div class="more">
                <a href = "index.php?p=catalog">
                    <h2>Подробнее</h2>
                </a>
            </div>
</section> 