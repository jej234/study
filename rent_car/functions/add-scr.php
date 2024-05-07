<?php session_start(); 
?>
    <pre>
        <?php print_r($_POST); ?>
    </pre>
    
<?php
    // загрузка картинки карточки

    // if($_FILES['card_img']['type'] != "image/jpeg" OR $_FILES['card_img']['type'] != "image/png" OR $_FILES['card_img']['type'] != "image/jpg") {
    //     $_SESSION['msg'] = "Неверный формат файла".$_FILES['card_img']['type'];
    //     header("Location: ../add_card.php");
    // }

    $path_img_one = 'resources/'.time().$_FILES['card_img']['name'];
    $gallery_path_arr = [];
    $down_status = FALSE;
    echo '<pre>';

    if (move_uploaded_file($_FILES['card_img']['tmp_name'], '../'.$path_img_one)) {
        echo "Файл корректен и был успешно загружен.\n";
        echo $_FILES['card_img']['type'];
        $down_status = TRUE;
    } else {
        echo "Неудача\n";
    }

    // загрузка картинок автомобиля

    $count_cards = count($_FILES['gallery']['name']);

    for($i = 0; $i < $count_cards; $i++) {
        $path = 'resources/'.time().$_FILES['gallery']['name'][$i];
        echo $path;
        
        echo '<pre>';

        if (move_uploaded_file($_FILES['gallery']['tmp_name'][$i], '../'.$path)) {
            echo "Файл {$_FILES['gallery']['name'][$i]} корректен и был успешно загружен.\n";
            $down_status = TRUE;
            $gallery_path_arr[$i] = $path;
        } else {
            echo "Неудача при загрузке файла {$_FILES['gallery']['name'][$i]}.\n";
            $down_status = FALSE;
        }
    }

    if($down_status == true) {
        $_SESSION["add_card"] = 1;
        
    }

?>
