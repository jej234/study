<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head-common.php' ?>
    <title>Прокат автомобилей в Орле</title>
</head>
<body>
    <main>

    <?php 

    include 'templates/header.php'; 
    include 'templates/navbar.php';

    ?>

<section class="main-content auth-content">

    <div class="auth">
        <h1>Добавление информации</h1>
        <form action="">
            <label for="brand">
                Выбор из имеющихся моделей автомобилей
            </label>
            <select id="brand" name="brand" required>
            <?php
                $exist_models = get_exists_models(); 
                foreach ($exist_models as $val): ?>
                <option value=<?=$val["car_model_id"] ?>><?php echo $val['brand_name']." ".$val['car_model_name']." ".$val['car_class_name'] ?></option>
            <?php endforeach; ?>
            </select>

            <label for="body">
                Тип кузова
            </label>
            <select id="body" name="body" required>
            <?php
                $bodies = get_body(); 
                foreach ($bodies as $val): ?>
                <option value=<?=$val["body_id"] ?>><?=$val["body_name"] ?></option>
            <?php endforeach; ?>
            </select>

            <label for="color">
                Цвет
            </label>
            <select id="color" name="color" required>
            <?php
                $colors = get_color(); 
                foreach ($colors as $val): ?>
                <option value=<?=$val["color_id"] ?>><?=$val["color_name"] ?></option>
            <?php endforeach; ?>
            </select>
            
            <label for="color">
                Тип КПП
            </label>
            <select id="color" name="color" required>
            <?php
                $tr = get_transmission(); 
                foreach ($tr as $val): ?>
                <option value=<?=$val["transmission_id"] ?>><?=$val["transmission_name"] ?></option>
            <?php endforeach; ?>
            </select>

            
 
            <div class="wrap">
                <button type="submit">
                    Добавить
                </button>
            </div>
        </form>
    </div>
            
        </section>

<?php
    include 'templates/footer.php';

    ?>