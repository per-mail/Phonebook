<?php
// Получаем данные из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Загружаем данные из файла JSON
$contacts = json_decode(file_get_contents('contacts.json'), true);

// Добавляем новый контакт
$contacts[] = array('name' => $name, 'phone' => $phone);

// Записываем обновленные данные обратно в файл JSON
file_put_contents('contacts.json', json_encode($contacts));

// Перенаправляем обратно на главную страницу
header('Location: index.php');
?>