<?php $nav_point = [
    "main"=> "Главная",
    "catalog"=> "Каталог",
    "about"=> "О нас",
    "contacts"=> "Контакты"
]; 

?>        
<nav>
    <ul>
        <?php 
            foreach ($nav_point as $key => $value) {
                echo "<li><a href = \"index.php?p=$key\">$value</a></li>";
            }
        ?>
            </ul>
        </nav>