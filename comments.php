<!-- Открываем тег html -->
<html>
    <body>
        <head>
        <meta charset="utf-8"> <!-- Устанавливаем кодировку страницы -->
        <title>Комментарии</title> <!-- Устанавливаем заголовок страницы -->
        </head>
<?php require_once("MySiteDB.php"); ?> <!-- Подключаем файл MySiteDB.php -->
<?php
    $note_id = $_GET['note']; // Получаем значение параметра note из URL
    $query="SELECT * FROM comments"; // Формируем SQL-запрос на выборку всех комментариев
    $select_comments = mysqli_query($link, $query); // Выполняем запрос к базе данных и сохраняем результат в переменную
    while ($comments = mysqli_fetch_array($select_comments)) // Перебираем результаты выборки
    {
        echo $comments ['created'],"<br>"; // Выводим дату создания комментария
        echo $comments ['comment'],"<br>"; // Выводим текст комментария
    }
    //Формируем SQL-запрос на выборку с учетом переданного id заметки
    $query = "SELECT created, title, article FROM notes WHERE id = $note_id"; // Формируем SQL-запрос на выборку заметки по id
    $query_comments = "SELECT * FROM comments WHERE art_id = $note_id"; // Формируем SQL-запрос на выборку комментариев по id заметки
?>
    </body>
</html> <!-- Закрываем тег html -->