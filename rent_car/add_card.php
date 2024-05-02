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
                  Марка
            </label>
            <select id="brand" name="brand" required>
            <?php
                $brands_arr = get_brands(); 
                foreach ($brands_arr as $val): ?>
                <option value=<?=$val["brand_id"] ?>><?=$val["brand_name"] ?></option>
            <?php endforeach; ?>
            </select>

            <label for="model">
                Модель
            </label>
            <select id="model" name="model" required>
            <?php
                $brands_arr = get_brands(); 
                foreach ($brands_arr as $val): ?>
                <option value=<?=$val["brand_id"] ?>><?=$val["brand_name"] ?></option>
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