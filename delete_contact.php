<?php
// Получаем имя контакта для удаления из запроса
$name = $_GET['name'];

// Загружаем данные из файла JSON
$contacts = json_decode(file_get_contents('contacts.json'), true);

// Ищем контакт с заданным именем и удаляем его
foreach ($contacts as $key => $contact) {
    if ($contact['name'] == $name) {
        unset($contacts[$key]);
        break;
    }
}

// Записываем обновленные данные обратно в файл JSON
file_put_contents('contacts.json', json_encode($contacts));

// Перенаправляем обратно на главную страницу
header('Location: index.php');
?>