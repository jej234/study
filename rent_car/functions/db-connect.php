<?php

$db_host = "localhost:3306";
$db_name = "prokat57";
$db_user = "root";
$db_pass = "";

$db = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);

function get_menu() {
    global $db;
    $q = $db->query("SELECT menu.menu_point_name, page.tag FROM menu JOIN page ON menu.menu_point_id = page.menu_point_id;");
    return $q;
}

function get_main_card_data($str_num) {
    global $db;
    $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, brand.brand_name, card_image.link_card_image 
    FROM car 
    JOIN car_model ON car.car_model_id = car_model.car_model_id 
    JOIN brand ON brand.brand_id = car_model.brand_id 
    JOIN card_image ON card_image.card_image_id = car.card_image_id 
    LIMIT $str_num");
    return $q;
}

function get_classes() {
    global $db;
    $q = $db->query("SELECT car_class_id, car_class_name FROM car_class");
    return $q;
}

function get_brands() {
    global $db;
    $q = $db->query("SELECT brand_id, brand_name FROM brand");
    return $q;
}

function get_year() {
    global $db;
    $q = $db->query("SELECT DISTINCT release_date FROM car;");
    return $q;
}
