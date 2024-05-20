<?php

//$db_host = "localhost:3306";
$db_host = "localhost:3310";
$db_name = "prokat";
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

function get_classes($num = 0) {
    global $db;

    if($num == 0) {
        $q = $db->query("SELECT car_class_id, car_class_name FROM car_class");
    } else {
        $q = $db->query("SELECT car_class_id, car_class_name FROM car_class WHERE car_class_id = $num");
    }

    
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
function get_data_car_page($car_id) {
    global $db;
    $q = $db->query("SELECT row_car.car_id, row_car.release_date, row_car.rent_price, 
    car_model.car_model_name, brand.brand_name, color.color_name, 
    car_class.car_class_name, body.body_name, transmission.transmission_name, row_car.description
        FROM (SELECT car_id, release_date, rent_price, car_model_id, color_id, body_id, 
                transmission_id, description
                FROM car 
                WHERE car_id = $car_id) AS row_car 
        JOIN car_model ON row_car.car_model_id = car_model.car_model_id 
        JOIN brand ON brand.brand_id = car_model.brand_id 
        JOIN car_class ON car_class.car_class_id = car_model.car_class_id
        JOIN color ON color.color_id = row_car.color_id
        JOIN body ON body.body_id = row_car.body_id
        JOIN transmission ON transmission.transmission_id = row_car.transmission_id;");
    return $q;
}

function get_car_images($im_num, $car_id) {
    global $db;

    if($im_num == 1) {
        $q = $db->query("SELECT link_car_image FROM car_image WHERE car_id = $car_id 
        ORDER BY link_car_image LIMIT 1");
    } else {
        $q = $db->query("SELECT link_car_image FROM car_image WHERE car_id = $car_id
        ORDER BY link_car_image LIMIT 1, $im_num");
    }

    
    return $q;
}

function get_catalog_card_data($class_id) {
    global $db;

        if($class_id == 0) {
            $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, 
                brand.brand_name, card_image.link_card_image, transmission.transmission_name
                FROM car 
                JOIN car_model ON car.car_model_id = car_model.car_model_id 
                JOIN brand ON brand.brand_id = car_model.brand_id 
                JOIN card_image ON card_image.card_image_id = car.card_image_id
                JOIN transmission ON car.transmission_id = transmission.transmission_id;");
        } else {
            $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, 
            brand.brand_name, card_image.link_card_image, transmission.transmission_name
            FROM car 
            JOIN car_model ON car.car_model_id = car_model.car_model_id 
            JOIN brand ON brand.brand_id = car_model.brand_id 
            JOIN card_image ON card_image.card_image_id = car.card_image_id
            JOIN transmission ON car.transmission_id = transmission.transmission_id
            WHERE car_model.car_class_id = $class_id;");
        }

    
    return $q;
}

function get_num_catalog_card_data($class_id) {
    global $db;

        if($class_id == 0) {
            $q = $db->query("SELECT COUNT(*) as num
                FROM car 
                JOIN car_model ON car.car_model_id = car_model.car_model_id 
                JOIN brand ON brand.brand_id = car_model.brand_id 
                JOIN card_image ON card_image.card_image_id = car.card_image_id
                JOIN transmission ON car.transmission_id = transmission.transmission_id;");
        } else {
            $q = $db->query("SELECT COUNT(*) as num
            FROM car 
            JOIN car_model ON car.car_model_id = car_model.car_model_id 
            JOIN brand ON brand.brand_id = car_model.brand_id 
            JOIN card_image ON card_image.card_image_id = car.card_image_id
            JOIN transmission ON car.transmission_id = transmission.transmission_id
            WHERE car_model.car_class_id = $class_id;");
        }

    
    return $q;
}

function get_catalog_search($brand_id=0, $year=0) {
    global $db;

    if ($year != 0 && $brand_id == 0) {
        $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, 
        brand.brand_name, card_image.link_card_image, transmission.transmission_name
        FROM car 
        JOIN car_model ON car.car_model_id = car_model.car_model_id 
        JOIN brand ON brand.brand_id = car_model.brand_id 
        JOIN card_image ON card_image.card_image_id = car.card_image_id
        JOIN transmission ON car.transmission_id = transmission.transmission_id
        WHERE car.release_date = $year;");
    } elseif($year == 0 && $brand_id != 0) {
        $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, 
        brand.brand_name, card_image.link_card_image, transmission.transmission_name
        FROM car 
        JOIN car_model ON car.car_model_id = car_model.car_model_id 
        JOIN brand ON brand.brand_id = car_model.brand_id 
        JOIN card_image ON card_image.card_image_id = car.card_image_id
        JOIN transmission ON car.transmission_id = transmission.transmission_id
        WHERE car_model.brand_id = $brand_id;");
    } elseif($year != 0 && $brand_id != 0) {
        $q = $db->query("SELECT car.car_id, release_date, rent_price, car_model.car_model_name, 
        brand.brand_name, card_image.link_card_image, transmission.transmission_name
        FROM car 
        JOIN car_model ON car.car_model_id = car_model.car_model_id 
        JOIN brand ON brand.brand_id = car_model.brand_id 
        JOIN card_image ON card_image.card_image_id = car.card_image_id
        JOIN transmission ON car.transmission_id = transmission.transmission_id
        WHERE car_model.brand_id = $brand_id AND car.release_date = $year;");
    }

    return $q;
}

function check_login($login) {
    global $db;
    $q = $db->query("SELECT COUNT(*) FROM account WHERE login = $login");
    return $q;
}

function get_exists_models() {
    global $db;
    $q = $db->query("SELECT *
    FROM car_model
    JOIN brand USING (brand_id)
    JOIN car_class USING (car_class_id)");
    return $q;
}

function get_body() {
    global $db;
    $q = $db->query("SELECT body_id, body_name FROM body");
    return $q;
}

function get_color() {
    global $db;
    $q = $db->query("SELECT color_id, color_name FROM color");
    return $q;
}

function get_transmission() {
    global $db;
    $q = $db->query("SELECT transmission_id, transmission_name FROM transmission");
    return $q;
}

function insert_car($car_model, $body, $color, $transmission, $release_date, $description, $rent_price, $path_img,$img_arr) {
    global $db;
    $q = $db->query("INSERT INTO card_image(link_card_image) VALUES ('$path_img')");
    $val = $db->query("SELECT MAX(card_image_id) FROM card_image")->fetchColumn();
    $q = $db->query("INSERT INTO car(car_model_id,body_id,color_id, transmission_id,release_date, 
                    description, rent_price, card_image_id, status_id) 
                    VALUES ($car_model, $body, $color, $transmission, $release_date, '$description', $rent_price,
                    $val, 1)");
    $car = $db->query("SELECT MAX(car_id) FROM car")->fetchColumn();
    // загрузка массива фотографий
    $stmt = $db->prepare("INSERT INTO car_image (car_id, link_car_image) VALUES (:car_id, :photo_path)");
    $db->beginTransaction();

    foreach ($img_arr as $photoPath) {
        $stmt->bindParam(':car_id', $car);
        $stmt->bindParam(':photo_path', $photoPath);
        $stmt->execute();
    }

    $db->commit();
    
    if($q) {
        return true;
    } else {
        return false;
    }
}

function get_card_list() {
    global $db;
    $q = $db->query("SELECT car_id, brand.brand_name, car_model.car_model_name, release_date, rent_price
                    FROM car
                    JOIN car_model USING(car_model_id)
                    JOIN brand USING(brand_id)");
    return $q;
}



/*

resources/mb14.jpg
	

resources/bmw1.jpg
	

resources/reno1.jpg
	

resources/corolla.jpg
	

resources/fiat1.jpg

resources/mb14.jpg
1
	
Изменить
Копировать
Удалить
resources/mb1.jpg
1
	
Изменить
Копировать
Удалить
resources/mb2.jpg
1
	
Изменить
Копировать
Удалить
resources/mb3.jpg
1
	
Изменить
Копировать
Удалить
resources/bmw1.jpg
2
	
Изменить
Копировать
Удалить
resources/bmw2.jpg
2
	
Изменить
Копировать
Удалить
resources/bmw3.jpg
2
	
Изменить
Копировать
Удалить
resources/bmw4.jpg
2
	
Изменить
Копировать
Удалить
resources/reno1.jpg
3
	
Изменить
Копировать
Удалить
resources/reno2.jpg
3
	
Изменить
Копировать
Удалить
resources/reno3.jpg
3
	
Изменить
Копировать
Удалить
resources/reno4.jpg
3
	
Изменить
Копировать
Удалить
resources/corolla.jpg
4
	
Изменить
Копировать
Удалить
resources/corolla1.jpg
4
	
Изменить
Копировать
Удалить
resources/corolla2.jpg
4
	
Изменить
Копировать
Удалить
resources/corolla3.jpg
4
	
Изменить
Копировать
Удалить
resources/fiat1.jpg
5
	
Изменить
Копировать
Удалить
resources/fiat2.jpg
5
	
Изменить
Копировать
Удалить
resources/fiat3.jpg
5
	
Изменить
Копировать
Удалить
resources/fiat4.jpg
5

INSERT INTO card_image (link_car_image, car_id) values 
('resources/mb4.jpg', 1),
('resources/mb1.jpg', 1),
('resources/mb2.jpg', 1),
('resources/mb3.jpg', 1),
('resources/bmw1.jpg', 2),
('resources/bmw2.jpg', 2),
('resources/bmw3.jpg', 2),
('resources/bmw4.jpg', 2),
('resources/reno1.jpg', 3),
('resources/reno2.jpg', 3),
('resources/reno3.jpg', 3),
('resources/reno4.jpg', 3),
('resources/corolla.jpg', 4),
('resources/corolla1.jpg', 4),
('resources/corolla2.jpg', 4),
('resources/corolla3.jpg', 4),
('resources/fiat1.jpg', 5),
('resources/fiat2.jpg', 5),
('resources/fiat3.jpg', 5),
('resources/fiat4.jpg', 5); */