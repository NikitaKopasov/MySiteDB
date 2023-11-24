<?php require_once("MySiteDB.php"); ?> <!-- Подключаем файл с базой данных -->

<html>
    <head>
        <meta charset="utf-8">
        <title>Главная страница сайта</title>
    </head>
<body>
    <site style="text-align:center;">
    <menu> <!-- Создаем меню с кнопками -->
        <button type="button"> Вход</button>
        <button type="button"> Новая заметка</button>
        <a href="email.php"><button type="button"> Отправить сообщение</button></a> 
        <button type="button"> Добавить фото</button>
        <a href="inform.php"><button type="button"> Статистика</button></a>
        <button type="button"> Администратору</button>
        <button type="button"> Выход</button> <br>
    </menu>
    <p><b>Рад приветствовать вас <br>на страницах моего сайта, посвященного путешествиям. </b></p> <!-- Приветственное сообщение -->

</site>
<?php
        $query = "SELECT * FROM notes"; // Создаем SQL-запрос на выборку всех записей из таблицы notes
        $select_note = mysqli_query($link, $query); // Отправляем запрос на сервер

            while ($note = mysqli_fetch_array($select_note)) // Перебираем все полученные записи
            {
                echo $note ['id'], "<br>"; ?> <!-- Выводим id записи -->
                <a href="comments.php?note=<?php echo $note['id']; ?>"> <!-- Создаем ссылку на страницу комментариев для данной записи -->
                <?php echo $note ['title'], "<br>";?></a> <!-- Выводим заголовок записи и закрываем ссылку -->
                <?php
                echo $note ['created'], "<br>"; // Выводим дату создания записи
                echo $note ['article'], "<br>"; // Выводим содержание записи
            }
    ?>
</body>
</html>