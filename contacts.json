<!DOCTYPE html>
<html>
<head>
    <title>Телефонный справочник</title>
</head>
<body>
    <h2>Добавить контакт</h2>
    <form action="add_contact.php" method="post">
        Имя: <input type="text" name="name"><br>
        Телефон: <input type="text" name="phone"><br>
        <input type="submit" value="Добавить">
    </form>
    <hr>
    <h2>Список контактов</h2>
    <ul>
        <?php
        // Загружаем данные из файла JSON
        $contacts = json_decode(file_get_contents('contacts.json'), true);

        // Выводим список контактов
        foreach ($contacts as $contact) {
            echo "<li>{$contact['name']} - {$contact['phone']} <a href='delete_contact.php?name={$contact['name']}'>Удалить</a></li>";
        }
        ?>
    </ul>
</body>
</html>