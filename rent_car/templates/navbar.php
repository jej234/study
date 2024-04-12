    <nav>
    <ul>
        <?php 
            $menu_arr = get_menu();
            foreach ($menu_arr as $value) :
        ?>
                <li>
                    <a href="index.php?p=<?=$value["tag"] ?>"><?=$value["menu_point_name"] ?></a>
                </li>
        
        <?php endforeach ?>
            </ul>
    </nav>