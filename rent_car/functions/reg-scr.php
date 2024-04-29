
<?php
session_start();
print_r($_POST);

$send = TRUE;

$login = $_POST["login-reg"];
$password = $_POST["password"];
$name = $_POST["name"];
$first_name = $_POST["first_name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// Проверка валидации для логина
function validateLogin($login) {
    $pattern = '/^[\w]{6,20}$/';
    return preg_match($pattern, $login);
}

// Проверка валидации для пароля
function validatePassword($password) {
    $pattern = '/^[a-zA-Z0-9_!@?]{8,20}$/';
    return preg_match($pattern, $password);
}

// Проверка валидации для имени
function validateName($name) {
    $pattern = '/^[а-яА-ЯЁё\s]+$/u';
    return preg_match($pattern, $name);
}

// Проверка валидации для номера телефона
function validatePhone($phone) {
    $pattern = '/^7\d{10}$/';
    return preg_match($pattern, $phone);
}

// Проверка валидации для email
function validateEmail($email) {
    $pattern = '/^\S+@\S+\.\S+$/';
    return preg_match($pattern, $email);
}

if (!validateLogin($login)) {
    echo "Недопустимый логин\n";
    $send = FALSE;
    
}

if (!validatePassword($password)) {
    echo "Недопустимый пароль\n";
    $send = FALSE;
}

if (!validateName($name)) {
    echo "Недопустимое имя\n";
    $send = FALSE;
}

if (!validateName($name)) {
    echo "Недопустимая фамилия\n";
    $send = FALSE;
}

if (!validatePhone($phone)) {
    echo "Недопустимый номер телефона\n";
    $send = FALSE;
}

if (!validateEmail($email)) {
    echo "Недопустимый email\n";
    $send = FALSE;
}

if ($send == FALSE) {
    
}
?>
